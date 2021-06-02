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
          <div class="col-md-5 well">
				<!--login-->
				<div class="form-w3agile form1">
					<h3>Register</h3>
					{{Form::open(['method'=>'POST'])}}
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Firstname" name="first_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
            <div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Lastname" name="last_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="text" value="Phone_number" name="phone_number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
							<div class="clearfix"></div>
						</div>
            <div>

							<textarea name="address" placeholder="Address"></textarea>
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit">
					{{Form::close()}}
				</div>
				<!--login-->
          </div>

          <div class="col-md-5 well col-md-offset-2">
				<!--login-->
					<div class="form-w3agile">
						<h3>Login To New Shop</h3>
            {{ Session::get('message') }}
            {{Form::open(['method'=>'POST'])}}
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
								<div class="clearfix"></div>
							</div>
							<input type="submit" value="Login">
            {{Form::close()}}
					</div>
					<div class="forg">
						<a href="#" class="forg-left">Forgot Password</a>
						<a href="registered.html" class="forg-right">Register</a>
					<div class="clearfix"></div>
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
