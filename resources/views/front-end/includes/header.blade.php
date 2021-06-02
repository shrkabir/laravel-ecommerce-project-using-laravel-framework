<div class="header">
  <div class="header-top">
    <div class="container">
      <div class="top-right">
      <ul>
        @if(Session::get('customer_id'))
          <li><a href="{{route('customer-logout')}}">Logout</a></li>
        @else
          <li><a href="{{route('customer-login-home')}}">Login or Registration</a></li>
        @endif
      </ul>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="heder-bottom">
    <div class="container">
      <div class="logo-nav">
        <div class="logo-nav-left">
          <h1><a href="{{route('/')}}">My Shop <span>Shop anywhere</span></a></h1>
        </div>
        <div class="logo-nav-left1">
          <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav">
              @foreach($categories as $category)
              <li class="active"><a href="{{ route('catagory-product', ['category_id'=>$category->category_id]) }}" class="act">{{$category->category_name}}</a></li>
              <!-- Mega Menu -->
              @endforeach
            </ul>
          </div>
          </nav>
        </div>
        <div class="logo-nav-right">
          <ul class="cd-header-buttons">
            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
          </ul> <!-- cd-header-buttons -->
          <div id="cd-search" class="cd-search">
            <form action="#" method="post">
              <input name="Search" type="search" placeholder="Search...">
            </form>
          </div>
        </div>
        <div class="header-right2">
          <div class="cart box_1">
            <a href="{{route('view-cart')}}">
              <h3><span>Your Cart</span>
                <img src="{{ asset('/') }}front-end/images/bag.png" alt="" />
              </h3>
            </a>
            <div class="clearfix"> </div>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
