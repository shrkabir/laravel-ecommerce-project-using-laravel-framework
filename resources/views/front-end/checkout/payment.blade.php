@extends('front-end.master')

@section('title')
  Product Details
@endsection

@section('body')
<div class="banner1">
    <div class="container">
      <h3><a href="index.html">Home</a> / <span>Your Cart</span></h3>
    </div>
  </div>
<!--banner-->

<!--content-->
  <div class="content">
    <!--single-->
    <div class="single-wl3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 well">
            <h3 class="text-success text-centre">Dear {{Session::get('customer_name')}}, please select a payment method for your valuable order.</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8 col-md-offset-2 well">
				<!--login-->
					<h3>Payment info</h3><br/>
          {{ Form::open(['route'=>'new-order', 'method'=>'POST']) }}
          <table class="table table-bordered">
            <tr>
              <td><input type="radio" name="payment_type" value="Cash"> Cash on delivery</td>
            </tr>
            <tr>
              <td><input type="radio" name="payment_type" value="Paypal"> Paypal</td>
            </tr>
            <tr>
              <td><input type="radio" name="payment_type" value="Bkash"> Bkash</td>
            </tr>
            <tr>
              <td><input type="submit" name="confirm_payment" value="Confirm Payment"></td>
            </tr>
          </table>
          {{ Form::close()}}
				<!--login-->
          </div>
        </div>
      </div>
    </div>
    <!--single-->

    <!--new-arrivals-->
  </div>
@endsection
