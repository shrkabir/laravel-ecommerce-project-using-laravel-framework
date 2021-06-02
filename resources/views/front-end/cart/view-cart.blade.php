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
          <div class="col-md-11 col-md-offset-1">
            <h3>{{Session::get('message')}}</h3>
            <h3 class="text-centre text-success">My Shopping Cart</h3>
            <hr/>
            <table class="table table-bordered">
              <tr class="bg-primary">
                <th>SL. NO.</th>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
              </tr>
              @php($i=1)
              @php($sum=0)
              @foreach($cartItems as $cartItem)
              <tr>
                <td>{{$i++}}</td>
                <td>{{ $cartItem->name}}</td>
                <td><img src="{{ asset($cartItem->options->product_image)}}" width="50" height="50"/></td>
                <td>TK. {{ $cartItem->price}}</td>
                <td>
                  {{Form::open(['route'=>array('qty-update', 'rowId'=>$cartItem->rowId), 'method'=>'POST'])}}
                    <input type="number" name="update_quantity" value="{{ $cartItem->qty}}" min="1"/>
                    <input type="submit" name="qty_update_btn" value="update product quantity"/>
                  {{Form::close()}}
                </td>
                <td>TK. {{ $total=$cartItem->price*$cartItem->qty}}</td>
                <td>
                  <a href="{{route('remove-cart-item', ['cart_row_id'=>$cartItem->rowId])}}" class="btn btn-danger" title="Remove this item from cart">Remove</a>
                </td>
              </tr>
              <?php $sum=$sum+$total?>
              @endforeach
            </table>
            <table class="table table-bordered">
              <tr>
                <th>Total Price</th>
                <td>TK. {{$sum}}</td>
              </tr>
              <tr>
                <th>VAT</th>
                <td>TK. {{$vat=0.00}}</td>
              </tr>
              <tr>
                <th>Grand Total</th>
                <td>TK. {{$orderTotal=$sum+$vat}}</td>
                {{ Session::put('order_total', $orderTotal)}}
              </tr>
            </table>
          </div>
        </div>

        <div class="row">
          <div class="col-md-11 col-md-offset-1">
            @if(Session::get('customer_id') && Session::get('shipping_id'));
            <a href="{{ route('checkout-payment') }}" class="btn btn-success pull-right">Checkout</a>
            @elseif(Session::get('customer_id'))
            <a href="{{ route('shipping') }}" class="btn btn-success pull-right">Checkout</a>
            @else
            <a href="{{ route('checkout') }}" class="btn btn-success pull-right">Checkout</a>
            @endif
            <a href="{{route('/')}}" class="btn btn-success">Continue Shopping</a>
          </div>
        </div>
      </div>
    </div>
    <!--single-->

    <!--new-arrivals-->
  </div>
@endsection
