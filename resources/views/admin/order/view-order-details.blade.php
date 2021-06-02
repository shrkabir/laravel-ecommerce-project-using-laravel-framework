@extends('admin.master')

@section('admin-title')
  View order details
@endsection

@section('admin-page-body')

<div class="row container">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center text-success">Order information</h4>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-staiped">
          <tr>
            <th>Order ID</th>
            <td>{{$order->order_id}}</td>
          </tr>
          <tr>
            <th>Order Status</th>
            <td>{{$order->order_status}}</td>
          </tr>
          <tr>
            <th>Order Total</th>
            <td>{{$order->order_total}}</td>
          </tr>
          <tr>
            <th>Order Date</th>
            <td>{{$order->created_at}}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="row container">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center text-success">Customer info of this order</h4>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-staiped">
          <tr>
            <th>Customer Name</th>
            <td>{{$customer->first_name.' '.$customer->last_name}}</td>
          </tr>
          <tr>
            <th>Phone Number</th>
            <td>{{$customer->phone}}</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>{{$customer->email}}</td>
          </tr>
          <tr>
            <th>Address</th>
            <td>{{$customer->address}}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="row container">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center text-success">Shipping info of this order</h4>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-staiped">
          <tr>
            <th>Full Name</th>
            <td>{{ $shipping->full_name }}</td>
          </tr>
          <tr>
            <th>Phone Number</th>
            <td>{{ $shipping->phone_number }}</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>{{ $shipping->email }}</td>
          </tr>
          <tr>
            <th>Address</th>
            <td>{{ $shipping->shipping_address }}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="row container">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center text-success">Payment info of this order</h4>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-staiped">
          <tr>
            <th>Payment type</th>
            <td>{{ $payment->payment_type}}</td>
          </tr>
          <tr>
            <th>Payment status</th>
            <td>{{ $payment->payment_status}}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="row container">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center text-success">Product info of this order</h4>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <tr>
            <th>SL NO</th>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Total Price</th>
          </tr>
          @php($i=1)
          @foreach($orderDetails as $orderDetail)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$orderDetail->product_id}}</td>
            <td>{{$orderDetail->product_name}}</td>
            <td>{{$orderDetail->product_price}}</td>
            <td>{{$orderDetail->product_quantity}}</td>
            <td>{{$orderDetail->product_price*$orderDetail->product_quantity}}</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
