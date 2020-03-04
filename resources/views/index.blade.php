@extends('layouts.app')

@section('content')

<div class="container">
  <!-- Introduction -->
  <section class="bg-light text-center">
    <div class="row">

      <div class="col-md-7">
        <div class="text-center">
          <img style="object-fit: cover; max-height: 300px" src="https://cdn.vox-cdn.com/thumbor/Pkmq1nm3skO0-j693JTMd7RL0Zk=/0x0:2012x1341/1200x800/filters:focal(0x0:2012x1341)/cdn.vox-cdn.com/uploads/chorus_image/image/47070706/google2.0.0.jpg">
        </div>
      </div>

      
      <div class="col-md-5">
        <div class="centerit">
          <h2 class="font-weight-bold py-4">What is sPAYce?</h2>
        	<div class="row justify-content-center">
        		<p class="col">sPAYce is an organic marketing initiative that allows you to earn extra money while you are driving on the road by placing our partner companies' decals on your car. </p>
        	</div>
        </div>
      </div>

    </div>
  </section>
  <!-- WHY section -->
  <section class=" bg-light text-center">
    <h2 class="font-weight-bold py-4">Why use sPAYce?</h2>
    <div class="container-fluid no-gutters">

      <div class="row py-2">

        <div class="col-lg-4">
          <div class="text-center px-5 py-2">
            <img class="img-fluid" src="/storage/stock_images/flexibility.png" style="max-width: 150px">
          </div>
            <h3>Competitive fees</h3>
            <p>We offer a competitive rate for your services. Enjoy earning extra income with us.</p>
        </div>

        <div class="col-lg-4">
          <div class="text-center px-5 py-2">
            <img class="img-fluid" src="/storage/stock_images/money.png" style="max-width: 150px">
          </div>
            <h3>Competitive fees</h3>
            <p>We offer a competitive rate for your services. Enjoy earning extra income with us.</p>
        </div>

        <div class="col-lg-4">
          <div class="text-center px-5 py-2">
            <img class="img-fluid" src="/storage/stock_images/choice.png" style="max-width: 150px">
          </div>
            <h3>Choice of advertisements</h3>
            <p>Only place advertisements of your choice. Support your favourite causes, brands and hobbies.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- GEtting Started Section -->
  <section>
    <h2 class="py-4 font-weight-bold text-center">How do I get started?</h2>
    <div class="row no-gutters">
      <div class="col-md-2">
      </div>


      <div class="col-md-4 text-center px-2 py-2">
        <div class="card text-white" style="position: relative">
          <img src="https://cxl.com/wp-content/uploads/2017/07/partnership-program.jpeg" class="card-img img-fluid" style="object-fit: cover; max-width: 500px; min-height: 300px; filter: brightness(30%);" >
          <div class="card-img-overlay">
            <h5 class="card-title bg-light py-2" style="color: black;">Join as a partner</h5>
            <p class="card-text text-center px-2 font-weight-bold centerit">Want to advertise with us? Don't hesistate to contact us today!</p>
            <a href="{{ url('/drivers') }}"><button class="btn btn-success centerit" style="margin:0px">Sign Up</button></a>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 text-center px-2 py-2">
        <div class="card text-white" style="position: relative">
          <img src="https://www.todayonline.com/sites/default/files/styles/new_app_article_detail/public/photos/43_images/31882852.JPG?itok=ns2i-m4t" class="card-img img-fluid" style="object-fit: cover; max-width: 500px; min-height: 300px; filter: brightness(30%);" >
          <div class="card-img-overlay">
            <h5 class="card-title bg-light py-2" style="color: black;">Join as a driver</h5>
            <p class="card-text text-center px-2 font-weight-bold centerit">Sign up to be a driver with us today and earn extra money on the go with ease.</p>
            <a href="{{ url('/drivers') }}"><button class="btn btn-success centerit" style="margin:0px">Sign Up</button></a>
          </div>
        </div>
      </div>
      <div class="col-md-2">
      </div>

    </div>
  </section>

  </div>
</div>

<div class="py-3">
</div>
@include('includes.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
@endsection