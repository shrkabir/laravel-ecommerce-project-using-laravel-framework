@extends('front-end.master')

@section('title')
  Complete Order
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
            <h2 class="text-success text-centre">Congratulation! Dear {{Session::get('customer_name')}}, your order has placeded successfully.</h2>
          </div>
        </div>
      </div>
    </div>
    <!--single-->

    <!--new-arrivals-->
  </div>
@endsection
