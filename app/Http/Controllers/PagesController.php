<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

	public function drivers() {
        $title = 'Drivers';
        return view('pages.drivers')->with('title',$title);
    }

    public function partnerships() {
        $title = 'What We Do';
        return view('pages.partnerships')->with('title',$title);
    }

    public function contact() {
        $title = 'What We Do';
        return view('pages.contact')->with('title',$title);
    }

    public function signup() {
        return view('pages.signup');
    }

}
