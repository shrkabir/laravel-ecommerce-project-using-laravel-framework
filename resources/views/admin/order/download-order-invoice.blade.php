<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Download Invoice</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/') }}admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/') }}admin/css/sb-admin-2.min.css" rel="stylesheet">

    <script src="{{asset('/')}}admin/ckeditor/ckeditor.js"></script>
    <script src="{{asset('/')}}admin/ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="{{asset('/')}}admin/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

    <style>
    .shipping-info{
      margin-right: 50px;
      float: left;
      width: 300px;
    }
    .customer-info{
      margin-right: 100px;
      float: left;
      width: 300px;
    }
    .shop-info{
      text-align: center;
    }
    .product-info{

    }
  </style>
</head>

<body>
<div class="row container">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-body">
        <div>
          <div class="shop-info">
            <h3>New Shop</h3>
            <p>7/A, Road# 5, This is the address of New Shop</p>
          </div>
        </br>
          <div class="shipping-info">
            <h4>Shipping info</h4>
              <p>{{ $shipping->full_name}}</p>
              <p>Address: {{ $shipping->shipping_address}}</p>
            <p>Contact Number: {{ $shipping->phone_number}}<p>
          </div>
          <div class="customer-info">
            <h4>Customer info</h4>
              <p>{{$customer->first_name.' '.$customer->last_name}}</p>
              <p>Address: {{$customer->address}}</p>
              <p>Contact Number: {{$customer->phone}}<p>
          </div>
          <div>
            <table class="table-bordered table-striped">
              <tr>
                <th>Invoice No</th>
                <td>{{$order->order_id}}</td>
              </tr>
              <tr>
                <th>Order Date</th>
                <td>{{$order->created_at}}</td>
              </tr>
            </table>
          </div>
        </div>
      </br></br>
        <div class="product-info">
          <table class="table table-bordered table-striped">
            <tr>
              <th>Product Name</th>
              <th>Product Quantity</th>
              <th>Product Rate</th>
              <th>Product Price</th>
            </tr>
            @foreach($orderDetails as $orderDetail)
            <tr>
              <td>{{$orderDetail->product_name}}</td>
              <td>{{$orderDetail->product_quantity}}</td>
              <td>TK. {{$orderDetail->product_price}}</td>
              <td>TK. {{$orderDetail->product_price*$orderDetail->product_quantity}}</td>
            </tr>
            @endforeach
          </table>
        </div>
        <div>
          <table class="table table-bordered">
            <tr>
              <th>Total payable amount</th>
              <td>TK. {{$order->order_total}}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
