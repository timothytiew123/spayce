<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Opening;

class OpeningsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //$posts= Post::all();
        //$posts = Post::orderBy('created_at','desc')->take(1)->get();
        //$post = Post::where('title','Post One')->get();
        //$posts = DB::select("SELECT * FROM posts");
        $openings = Opening::orderBy('created_at','desc')->paginate(10);

        return view('openings.index')->with('openings', $openings);
    }

    public function search(Request $request)
    {
        $category = $request->get('category');
        $search = $request->get('search');

        if($category=='sports') {

        $openings = Opening::where('title', 'LIKE', '%{$search}%')->orWhere('description', 'LIKE', "%{$search}%")->where('category', 'LIKE', 'sports')->paginate(10);

        return view('openings.index')->with('openings', $openings);

        } elseif ($category == "allcategories") {

            $openings = Opening::where('title', 'LIKE', '%{$search}%')->orWhere('description', 'LIKE', "%{$search}%")->paginate(10);

        return view('openings.index')->with('openings', $openings);

        } elseif($category == "outdoor") {

            $openings = Opening::where('title', 'LIKE', '%{$search}%')->orWhere('description', 'LIKE', "%{$search}%")->where('category', 'LIKE', 'outdoor')->paginate(10);

        return view('openings.index')->with('openings', $openings);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        if(auth()->user()->auth_level !== 2) {
            Auth::logout();
            return redirect('/');
        }

        return view('openings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required ',
            'category' => 'required',
            'cover_image' => 'nullable|max:2999'
        ]);

        //Handle File Upload
        if($request->hasFile('cover_image')) {
            //Get File Name with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //create Opening

        if (auth()->user()->auth_level === 2) {
            $opening = new Opening;
            $opening->title = $request->input('title');
            $opening->category = $request->input('category');
            $opening->description = $request->input('description');
            $opening->user_id = auth()->user()->id;
            $opening->cover_image = $fileNameToStore;
            $opening->save();

            return redirect('/openings')->with('success', 'Post Created');

        } else {

            return redirect('/login?fatalerror');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opening = Opening::find($id);

        return view('openings.show')->with("opening",$opening);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opening = Opening::find($id);

        if(auth()->user()->id !== $opening ->user_id) {
            return redirect('/openings')->with('error','Unauthorized page');
        }
        
        return view("openings.edit")->with("opening", $opening);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required ',
            'cover_image' => 'image|nullable|max:2999'
        ]);

        //Handle File Upload
        if($request->hasFile('cover_image')) {
            //Get File Name with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } 

        $opening = Opening::find($id);
        $opening->title = $request->input('title');
        $opening->category = $request->input('category');
        $opening->description = $request->input('description');

        if($request->hasFile('cover_image')) {
            Storage::delete('public/cover_images/'.$opening->cover_image);
            $opening->cover_image = $fileNameToStore;
        }

        $opening->save();

        return redirect('/openings')->with('success', 'Opening Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opening = Opening::find($id);

        //Check for correct user
        if(auth()->user()->id !== $opening->user_id) {
            return redirect('/openings')->with('error','Unauthorized page');
        }

        if ($opening->cover_image != 'noimage.jpg') {
            // Delete Image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $opening->delete();
        return redirect('/openings')->with('success', 'Post Removed');
    }
}
