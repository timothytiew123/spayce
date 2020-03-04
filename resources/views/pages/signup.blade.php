@extends('layouts.app')

@section('content')



<div class="container">
  <div class="container text-center">
    <h2 class="font-weight-bold">Driver's sign-up Form</h2>
    <small>Fill in this form and we will be in contact with you for an onboarding session</small>
  </div>
  <div class="row justify-content-center py-4">
    <div class="col-md-6">
      <form class="form-group">
          Name
          <input class="form-control" type = "text" name ="name" id="name">
          <div class="py-1"></div>
          Email
          <input class="form-control" type = "email" name ="email" id="email">
          <div class="py-1"></div>
          Phone
          <input class="form-control" type = "text" name ="phone" id="phone">
      </form>

      <p id="re"></p>

      <div class="text-center py-3">
        <input class="text-center btn btn-primary" type = "button" onClick="insert_value()" value = "Submit Form"></input>
      </div>
    </div>
  </div>
</div>
<div class="py-3"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<script>  
  var script_url = "https://script.google.com/macros/s/AKfycbyUeZeSKYhN_7pRUjKouoduOwD2-zWsikKiNbNYXcy6R_vUgn0D/exec";
  
  // Make an AJAX call to Google Script
  function insert_value() {

  var name =  $("#name").val();
  var email = $("#email").val();
  var phone  = $("#phone").val();
  
    var url = script_url+"?callback=ctrlq&name="+name+"&email="+email+"&phone="+phone+"&action=insert"  

    var request = jQuery.ajax({
      crossDomain: true,
      url: url ,
      method: "GET",
      dataType: "jsonp"
    });

  }

  function ctrlq(e) {
  
  $("#re").html(e.result);
  $("#re").css({"visibility":"visible", "font-weight": "600", "padding": "10px", "background-color" : "#89cff0", "text-align":"center", "vertical-align": "middle"})
  read_value();
  
  }

</script>

@include('includes.footer')

@endsection
