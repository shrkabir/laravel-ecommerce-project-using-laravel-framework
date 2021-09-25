@extends('admin.master')

@section('admin-title')
  Manage Order
@endsection

@section('admin-page-body')

<div class="row container">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="text-center text-success">Manage Order</h3>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <tr>
            <th>SL NO</th>
            <th>Customer Name</th>
            <th>Order Total</th>
            <th>Order Date</th>
            <th>Order Status</th>
            <th>Payment Type</th>
            <th>Payment Status</th>
            <th>Action</th>
          </tr>
          @php($i=1)
          @foreach($orders as $order)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$order->first_name." ".$order->last_name}}</td>
            <td>{{$order->order_total}}</td>
            <td>{{$order->created_at}}</td>
            <td>{{$order->order_status}}</td>
            <td>{{$order->payment_type}}</td>
            <td>{{$order->payment_status}}</td>
            <td>
              <a href="{{route('view-order-details', ['order_id'=>$order->order_id])}}" class="btn btn-warning btn-xs btn-block"> View Order Details
              <!--  <span class="glyphicon glyphicon-arrow-up"></span> -->
              </a>
              <a href="{{ route('view-order-invoice', ['order_id'=>$order->order_id])}}" class="btn btn-info btn-xs btn-block"> View Order Invoice
              <!--  <span class="glyphicon glyphicon-arrow-up"></span>-->
              </a>
              <a href="{{ route('download-order-invoice', ['order_id'=>$order->order_id])}}" class="btn btn-success btn-xs btn-block">Download Order Invoice
              <!--  <span class="glyphicon glyphicon-edit"></span>-->
              </a>
              <a href="{{ route('edit-category', ['order_id'=>$order->order_id])}}" class="btn btn-success btn-xs btn-block">Edit Order
              <!--  <span class="glyphicon glyphicon-edit"></span>-->
              </a>
              <a href="{{ route('delete-category', ['order_id'=>$order->order_id])}}" class="btn btn-danger btn-xs btn-block">Delete Order
                <!--<span class="glyphicon glyphicon-trash"></span>-->
              </a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
