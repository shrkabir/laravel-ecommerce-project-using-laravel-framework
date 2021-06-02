@extends('admin.master')

@section('admin-title')
  Manage Product
@endsection

@section('admin-page-body')

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center text-success" id='manage_category_message'>{{Session::get('message')}}</h4>
        <h4 class="text-center text-success">Manage Product</h4>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <th>SL NO</th>
              <th>Category Name</th>
              <th>Brand Name</th>
              <th>Product Name</th>
              <th>Product Image</th>
              <th>Product Price</th>
              <th>Product Quantity</th>
              <th>Publication Status</th>
              <th>Action</th>
            </tr>
            @php($i=1)
            @foreach($products as $product)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$product->category_name}}</td>
              <td>{{$product->brand_name}}</td>
              <td>{{$product->product_name}}</td>
              <td><img src="{{asset('/')}}/{{$product->product_image}}" width="50" height="50"/></td>
              <td>{{$product->product_price}}</td>
              <td>{{$product->product_quantity}}</td>
              <td>{{$product->publication_status}}</td>
              <td>
                <a href="" class="btn btn-warning btn-xs btn-block" title="View Product Details"> View Product
                <!--  <span class="glyphicon glyphicon-arrow-up"></span> -->
                </a></br>
                <a href="" class="btn btn-warning btn-xs btn-block" title="Click to Unublish this product"> Unpublish
                  <!--  <span class="glyphicon glyphicon-arrow-up"></span> -->
                </a></br>
                <a href="{{ route('edit-product', ['product_id'=>$product->product_id]) }}" class="btn btn-success btn-xs btn-block" title="Edit this product">Edit
                  <!--  <span class="glyphicon glyphicon-edit"></span>-->
                </a>
                <a href="" class="btn btn-danger btn-xs btn-block" title="Delete this product">Delete
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
</div>

@endsection
