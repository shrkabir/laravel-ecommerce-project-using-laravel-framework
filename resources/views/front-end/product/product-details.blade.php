@extends('front-end.master')

@section('title')
  Product Details
@endsection

@section('body')
<div class="banner1">
</div>
<!--banner-->

<!--content-->
  <div class="content">
    <!--single-->
    <div class="single-wl3">
      <div class="container">
        <div class="single-grids">
          <div class="col-md-9 single-grid">
            <div clas="single-top">
              <div class="single-left">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                       <div class="thumb-image"> <img src="{{ asset($product->product_image) }}" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                   </ul>
                </div>
              </div>
              <div class="single-right simpleCart_shelfItem">
                <h4>{{$product->product_name}}</h4>
                <p class="price item_price">{{'TK. '.$product->product_price}}</p>
                <div class="description">
                  <p><span>Quick Overview : </span> {{$product->product_short_description}}</p>
                </div>
                {{ Form::open(['route'=>array('add-to-cart', 'product'=>$product->product_id), 'method'=>'POST']) }}
                <div class="color-quality">
                  <h6>Quantity :</h6>
                    <div class="quantity">
                      <input type="number" name="product_quantity" value="1" min="1"/>
                    </div>

                </div>
                <div class="women">
                  <input type="submit" name="cart_submit_btn" value="Add To Cart" class="my-cart-b item_add"/>
                </div>
                {{Form::close()}}
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
          <div class="col-md-3 single-grid1">
            <h3>Recent Products</h3>
            @foreach($recentProducts as $recentProduct)
            <div class="recent-grids">
              <div class="recent-left">
                <a href="{{ route('product-details', ['product_id'=>$recentProduct->product_id]) }}"><img class="img-responsive " src="{{asset($recentProduct->product_image)}}" alt=""></a>
              </div>
              <div class="recent-right">
                <h6 class="best2"><a href="{{ route('product-details', ['product_id'=>$recentProduct->product_id]) }}">{{$recentProduct->product_name}}</a></h6>
                <span class=" price-in1">TK. {{$recentProduct->product_price}}</span>
              </div>
              <div class="clearfix"> </div>
            </div>
            @endforeach
          </div>
          <div class="clearfix"> </div>
        </div>
        <!--Product Description-->
          <div class="product-w3agile">
            <h3 class="tittle1">Product Description</h3>
            <div class="product-grids">
              <div class="col-md-8 product-grid1">
                <div class="tab-wl3">
                  <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                      <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="descr">
                          <h4>{{$product->product_name}}</h4>
                          {{$product->product_long_description}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        <!--Product Description-->
      </div>
    </div>
    <!--single-->
  </div>
@endsection
