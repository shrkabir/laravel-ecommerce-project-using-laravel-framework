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
            <h3 class="text-success text-centre">Dear {{Session::get('customer_name')}}, please fill up the shipping info to complete your valuable order.</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8 col-md-offset-2 well">
				<!--login-->
				<div class="form-w3agile form1">
					<h3>Shipping info</h3>
					{{Form::open(['route'=>'new-shipping', 'method'=>'POST'])}}
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="{{ $customer_info->first_name.' '.$customer_info->last_name}}" name="full_name" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="{{ $customer_info->email }}" name="email" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="text" value="{{ $customer_info->phone }}" name="phone_number" required="">
							<div class="clearfix"></div>
						</div>
            <div>
							<textarea name="shipping_address" placeholder="Shipping Address">{{ $customer_info->address }}</textarea>
							<div class="clearfix"></div>
						</div>
            <div class="form-group">
              <input type="submit" class="btn btn-info" value="Save Shipping Info">
            </div>
					{{Form::close()}}
				</div>
				<!--login-->
          </div>
        </div>
      </div>
    </div>
    <!--single-->

    <!--new-arrivals-->
  </div>
@endsection
