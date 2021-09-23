@extends('front-end.master')

@section('title')
  HOME
@endsection

@section('body')

<div class="banner-w3">
  <div class="demo-1">
    <div id="example1" class="core-slider core-slider__carousel example_1">
      <div class="core-slider_viewport">
        <div class="core-slider_list">
          @foreach($slider_informations as $slider_info)
          <div class="core-slider_item ">
              <img src="{{$slider_info->slider_image}}" class="img-responsive" alt="{{$slider_info->slider_title}}">
          </div>
          @endforeach
         </div>
      </div>
      <div class="core-slider_nav">
        <div class="core-slider_arrow core-slider_arrow__right"></div>
        <div class="core-slider_arrow core-slider_arrow__left"></div>
      </div>
      <div class="core-slider_control-nav"></div>
    </div>
  </div>
  <link href="{{ asset('/') }}front-end/css/coreSlider.css" rel="stylesheet" type="text/css">
  <script src="{{ asset('/') }}front-end/js/coreSlider.js"></script>
  <script>
  $('#example1').coreSlider({
    pauseOnHover: false,
    interval: 3000,
    controlNavEnabled: true
  });
  </script>

</div>
<!--banner-->
  <!--content-->
<div class="content">
  <!--new-arrivals-->
    <div class="new-arrivals-w3agile">
      <div class="container">
        <h2 class="tittle">New Arrivals</h2>
        <div class="arrivals-grids">
          @foreach($newArrivalProducts as $newArrivalProduct)
          <div class="col-md-3 arrival-grid simpleCart_shelfItem">
            <div class="grid-arr">
              <div  class="grid-arrival">
                <figure>
                  <a href="{{ route('product-details', ['product_id'=>$newArrivalProduct->product_id]) }}" class="new-gri">
                    <div class="grid-img">
                      <img  src="{{ asset($newArrivalProduct->product_image) }}" class="img-responsive" alt="">
                    </div>
                    <div class="grid-img">
                      <img  src="{{ asset($newArrivalProduct->product_image) }}" class="img-responsive"  alt="">
                    </div>
                  </a>
                </figure>
              </div>
              <div class="ribben">
                <h2>NEW</h2>
              </div>
              <div class="women">
                <h6><a href="single.html">{{ $newArrivalProduct->product_name }}</a></h6>
                <p ><em class="item_price">TK. {{ ' '.$newArrivalProduct->product_price }}</em></p>
                <a href="{{ route('product-details', ['product_id'=>$newArrivalProduct->product_id]) }}" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
              </div>
            </div>
          </div>
          @endforeach
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  <!--new-arrivals-->
  <!--available-products-->
    <div class="new-arrivals-w3agile">
      <div class="container">
        <h2 class="tittle">Available Products</h2>
        <div class="arrivals-grids">
          @foreach($allProducts as $allProducts)
          <h2 class="tittle"></h2>
          <div class="col-md-3 arrival-grid simpleCart_shelfItem">
            <div class="grid-arr">
              <div  class="grid-arrival">
                <figure>
                  <a href="{{ route('product-details', ['product_id'=>$allProducts->product_id]) }}" class="new-gri">
                    <div class="grid-img">
                      <img  src="{{ asset($allProducts->product_image) }}" class="img-responsive" alt="">
                    </div>
                    <div class="grid-img">
                      <img  src="{{ asset($allProducts->product_image) }}" class="img-responsive"  alt="">
                    </div>
                  </a>
                </figure>
              </div>
              <div class="women">
                <h6><a href="single.html">{{ $allProducts->product_name }}</a></h6>
                <p ><em class="item_price">TK. {{ ' '.$allProducts->product_price }}</em></p>
                <a href="{{ route('product-details', ['product_id'=>$allProducts->product_id]) }}" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
              </div>
            </div>
          </div>
          @endforeach
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  <!--available-products-->
</div>
@endsection
