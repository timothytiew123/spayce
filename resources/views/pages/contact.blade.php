@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

<Style>

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 1px;
  margin-bottom: 12px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

 .button {

  display: inline-block;
  height: 40px;
  line-height: 40px;
  padding-right: 30px;
  padding-left: 70px;
  position: relative;
  background-color:rgb(0,0,0);
  color:rgb(255,255,255);
  text-decoration: none;
  text-transform: none
  letter-spacing: 1px;
  margin-bottom: 14px;
  text-shadow:1px 1px 0px rgba(0,0,0,0.5);
}

.button:hover{
  text-decoration: none;
  color: #fff;
  text-shadow: none;
}

.button p{font-size: 18px;}

.button span {
  position: absolute;
  left: 0;
  width: 50px;
  font-size:30px;
  -webkit-border-top-left-radius: 5px;
-webkit-border-bottom-left-radius: 5px;
-moz-border-radius-topleft: 5px;
-moz-border-radius-bottomleft: 5px;
border-top-left-radius: 5px;
border-bottom-left-radius: 5px;
border-right: 1px solid  rgba(0,0,0,0.15);
    text-decoration: none;
}

.button.twitter {
  background: #00acee;
}

.button.facebook {
 background: #3b5998;
}

.button.instagram{
  background: #dd2a7b;
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</Style>

<div class="container">
    <h2 class="text-center font-weight-bold">Contact Us</h2>
</div>
<div class="container">
  <div style="text-align:center">
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row px-4 py-1">
    <div class="col-md-6">

    	<div class="row py-2">
      		<img class="float-left" src="storage/stock_images/address.png" style="object-fit: fill; max-width: 40px; max-height: 40px">	
      		<p class="pl-4" style="margin:0px;">Block 307 Serangoon Avenue 2 #06-22<br>Postal Code: 555555</p>
      	</div>

      	<div class="row py-2">
      		<img class="float-left" src="storage/stock_images/phonenumber.png" style="object-fit: fill; max-width: 40px; max-height: 40px">	
      		<p class="py-1 pl-4"><b>Office:</b> +65 1111 1111</p>
      	</div>

      	<div class="row py-2">
      		<img class="float-left" src="storage/stock_images/email.png" style="object-fit: fill; max-width: 40px; max-height: 40px">	
      		<p class="pl-4" style="margin:0px;"><b>General Enquiries:</b> hello@spayce.com.sg<br> <b>Partnerships:</b> partnerships@spayce.com.sg</p>
      	</div>

      	<div class="text-center py-2">
      		<h3 class="py-4 text-center">Follow us Social Media</h3>
	        <div class="row">
	      		
	      			<a href="https://facebook.com/colorlib" target="_blank" class="button facebook mr-2"><span><i class="fa fa-facebook" aria-hidden="true"></i></span><p>Facebook</p></a>	
	      	

	      		
	      			<a href="https://twitter.com/colorlib" target="_blank" class="button twitter mr-2"><span><i class="fa fa-twitter" aria-hidden="true"></i></i></span><p>Twitter</p></a>	
	      		

	      		
	      			<a href="#" class="button instagram"><span><i class="fa fa-instagram mr-2" aria-hidden="true"></i></span><p>Instagram</p></a>
	      		
	      	</div>
      	</div>
    </div>

    
    

    <div class="col-md-6">
      <form action="/action_page.php">
      	<div class="form-group">
	        <label for="fname">First Name</label>
	        <input class="form-control" type="text" id="fname" name="firstname" placeholder="Your name..">
	        <label for="lname">Last Name</label>
	        <input class="form-control" type="text" id="lname" name="lastname" placeholder="Your last name..">
	       
	        <label for="subject">Subject</label>
	        <textarea class="form-control" id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
	        <input type="submit" value="Submit">
	    </div>
      </form>
    </div>
  </div>
</div>
<div class="py-3"></div>

@include('includes.footer')
@endsection
