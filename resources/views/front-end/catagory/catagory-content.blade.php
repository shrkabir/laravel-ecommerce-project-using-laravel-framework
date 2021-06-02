@extends('front-end.master')

@section('title')
  Catagory
@endsection

@section('body')

<!--banner-->
  <!--content-->
    <div class="content">
      <div class="products-agileinfo">
          <h2 class="tittle">{{$category->category_name}}</h2>
        <div class="container">
          <div class="product-agileinfo-grids w3l">

            <div class="col-md-11 product-agileinfon-grid1 w3l">

              <div class="mens-toolbar">
                <p >Showing 1–9 of 21 results</p>
                 <p class="showing">Sorting By
                  <select>
                      <option value=""> Name</option>
                      <option value="">  Rate</option>
                      <option value=""> Color </option>
                      <option value=""> Price </option>
                  </select>
                  </p>
                  <p>Show
                  <select>
                      <option value=""> 9</option>
                      <option value="">  10</option>
                      <option value=""> 11 </option>
                      <option value=""> 12 </option>
                  </select>
                  </p>
                <div class="clearfix"></div>
              </div>
              <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
                  <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="{{ asset('/')}}front-end/images/menu1.png"></a></li>
                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"><img src="{{ asset('/')}}front-end/images/menu.png"></a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                    <div class="product-tab">
                      @foreach($categoryProducts as $categoryProduct)
                      <div class="col-md-4 product-tab-grid simpleCart_shelfItem">
                        <div class="grid-arr">
                          <div  class="grid-arrival">
                            <figure>
                              <a href="{{ route('product-details', ['product_id'=>$categoryProduct->product_id]) }}" class="new-gri">
                                <div class="grid-img">
                                  <img  src="{{ asset($categoryProduct->product_image)}}" class="img-responsive" alt="">
                                </div>
                                <div class="grid-img">
                                  <img  src="{{ asset($categoryProduct->product_image)}}" class="img-responsive"  alt="">
                                </div>
                              </a>
                            </figure>
                          </div>
                          <div class="women">
                            <h6><a href="single.html">{{$categoryProduct->product_name}}</a></h6>
                            <p ><em class="item_price">{{' TK. '.$categoryProduct->product_price}}</em></p>
                            <a href="{{ route('product-details', ['product_id'=>$categoryProduct->product_id]) }}" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                    <div class="product-tab1">
                      @foreach($categoryProducts as $categoryProduct)
                      <div class="col-md-4 product-tab1-grid">
                        <div class="grid-arr">
                          <div  class="grid-arrival">
                            <figure>
                              <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                <div class="grid-img">
                                  <img  src="{{ asset($categoryProduct->product_image)}}" class="img-responsive" alt="">
                                </div>
                                <div class="grid-img">
                                  <img  src="{{ asset($categoryProduct->product_image)}}" class="img-responsive"  alt="">
                                </div>
                              </a>
                            </figure>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
                        <div class="block">
                          <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="women">
                          <h6><a href="single.html">{{ $categoryProduct->product_name }}</a></h6>
                          <span class="size">XL / XXL / S </span>
                          <p>{{ $categoryProduct->product_short_description }}</p>
                          <p ><del>$100.00</del><em class="item_price">{{ ' TK. '.$categoryProduct->product_price }}</em></p>
                          <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                      </div>

                      <div class="clearfix"></div>
                        @endforeach
                    </div>


                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
    </div>
@endsection
