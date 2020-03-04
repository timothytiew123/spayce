@extends('layouts.app')

@section('content')
<div class="container">

	<div class="text-center">
	    <h2 class="text-center font-weight-bold">Drive with us today!</h2>
	    <small class="text-center">Follow these simple steps and you can be with us</small>
	</div>
	<div class="py-3">
	</div>
	<div class="container">
		<div class="row pb-3">

	      	<div class="col-md-4 pb-2">
	        	<div class="text-center">
	          		<img class="img-fluid" src="/storage/stock_images/sign-up.png" style="max-width: 120px; object-fit: cover;">
	        	</div>
	      	</div>

	      	<div class="col-md-8 pb-2">
	        	<div class="centerit">
	          		<h5 class="font-weight-bold py-2">1. Sign up with us!</h5>
        			<div class="row justify-content-center">
        				<p class="col">Click on and fill in <a href="/signup"><button class="btn btn-secondary" style="padding: 2px 5px 2px 5px">this form</button></a> and a member of our team will be contacting you regarding the onboarding process.</p>
        			</div>
	        	</div>
      		</div>
      	</div>

      	<div class="row pb-3">
	      	<div class="col-md-4">
	        	<div class="text-center">
	          		<img class="img-fluid" src="/storage/stock_images/onboard.png" style="max-width: 120px; object-fit: cover;">
	        	</div>
	      	</div>
      		<div class="col-md-8">
	        	<div class="centerit">
	          		<h5 class="font-weight-bold py-2">2. Join the onboarding process</h5>
        			<div class="row justify-content-center">
        				<p class="col">After being contacted, come for one of our onboarding sessions to familiarise yourself with our system, finalise the details, and become a full fledged rider with us.</p>
        			</div>
	        	</div>
      		</div>
      	</div>

      	<div class="row pb-3">
	      	<div class="col-md-4">
	        	<div class="text-center">
	          		<img class="img-fluid" src="/storage/stock_images/website.png" style="max-width: 120px; object-fit: cover;">
	        	</div>
	      	</div>

      		<div class="col-md-8">
	        	<div class="centerit">
	          		<h5 class="font-weight-bold py-2">3. Use our online platform</h5>
        			<div class="row justify-content-center">
        				<p class="col">Browse for advertisements on our online platform and apply for them. After a certain number of riders have applied for an opening, you will be provided the decal and can begin earning.</p>
        			</div>
	        	</div>
      		</div>

      	</div>
      	<div class="py-3"></div>

      	<!-- Renumeration Section -->
      	<div class="container">
      		<div class="container text-center">
	      		<h2 class="text-center font-weight-bold">How much can you expect to earn</h2>
	      		<p class="text-center">Earn more money as you drive more. We go by a fixed and variable distance component.</p>
	      	</div>
      		<div class="row justify-content-center">
      			<div class="col-md-8">

      				<table class="table table-dark">	
					  <thead>
					    <tr>
					      <th scope="col">Distance in a week</th>
					      <th scope="col">Fixed</th>
					      <th scope="col">Variable</th>
					   
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">0-50km</th>
					      <td>$50</td>
					      <td>$1 per km</td>
			
					    </tr>
					    <tr>
					      <th scope="row">50-100km</th>
					      <td>$120</td>
					      <td>$1 per km</td>
				
					    </tr>
					    <tr>
					      <th scope="row">100km-200km</th>
					      <td>$250</td>
					      <td>$1.20 per km</td>
				
					    </tr>

					    <tr>
					      <th scope="row">>200km</th>
					      <td>$300</td>
					      <td>$1.30 per km</td>
				
					    </tr>

					  </tbody>
					</table>

				</div>
			</div>
      	</div>

	</div>
</div>
<div class="py-3"></div>
@include('includes.footer')
@endsection
