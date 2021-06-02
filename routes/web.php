<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [
  'uses'  => 'MyShopController@index',
  'as'    => '/'
]);

Route::get('/catagory-product/{category_id}', [
  'uses'  => 'MyShopController@catagoryProduct',
  'as'    => 'catagory-product'
]);

Route::get('/product-details/{product_id}', [
  'uses'  => 'MyShopController@productDetails',
  'as'    => 'product-details'
]);

Route::post('/addToCart/{product_id}', [
  'uses'  => 'CartController@addToCart',
  'as'    => 'add-to-cart'
]);

Route::get('/cart/view', [
  'uses'  => 'CartController@showCart',
  'as'    => 'view-cart'
]);

Route::get('/cart/remove/{cart_row_id}', [
  'uses'  => 'CartController@removeCartItem',
  'as'    => 'remove-cart-item'
]);

Route::post('/cart/update/{rowId}', [
  'uses'  => 'CartController@cartProductQtyUpdate',
  'as'    => 'qty-update'
]);

Route::get('/checkout', [
  'uses'  => 'CheckoutController@index',
  'as'    => 'checkout'
]);

Route::post('/customer/registration', [
  'uses'  => 'CheckoutController@customerRegistration',
  'as'    => 'user-reg-form'
]);

Route::post('/customer/login', [
  'uses'  => 'CheckoutController@customerLogin',
  'as'    => 'user-login-form'
]);

Route::get('/customer/logout', [
  'uses'  => 'CheckoutController@customerLogout',
  'as'    => 'customer-logout'
]);

Route::get('/home/customer/login', [
  'uses'  => 'CheckoutController@customerLoginHome',
  'as'    => 'customer-login-home'
]);

Route::group(['middleware'=>'frontendMiddleware'], function(){

  Route::get('/checkout/shipping', [
    'uses'  => 'CheckoutController@goToShipping',
    'as'    => 'shipping'
  ]);

  Route::post('/shipping/new-shipping/save', [
    'uses'  => 'CheckoutController@saveShippingInfo',
    'as'    => 'new-shipping'
  ]);

  Route::get('/checkout/payment', [
    'uses'  => 'CheckoutController@goToPayment',
    'as'    => 'checkout-payment'
  ]);

  Route::post('/checkout/order', [
    'uses'  => 'CheckoutController@newOrder',
    'as'  	=> 'new-order'
  ]);

  Route::get('/complete/order', [
    'uses'  => 'CheckoutController@completeOrder',
    'as'    => 'complete-order'
  ]);

});

/*---------------Admin Panel Routes-----------------*/

Route::group(['middleware'=>'adminMiddleware'], function(){
  Route::get('/category/add', [
    'uses'  => 'CatagoryController@index',
    'as'    => 'add-category'
  ]);

  Route::get('/catagory/manage', [
    'uses'  => 'CatagoryController@manageCatagory',
    'as'    => 'manage-catagory'
  ]);

  Route::post('/catagory/save', [
    'uses'  => 'CatagoryController@saveCatagory',
    'as'    => 'new-catagory'
  ]);

  Route::get('/catagory/unpublish/{category_id}', [
    'uses'  => 'CatagoryController@unpublishCategory',
    'as'    => 'unpublish-category'
  ]);

  Route::get('/category/publish/{category_id}', [
    'uses'  => 'CatagoryController@publishCategory',
    'as'    => 'publish-category'
  ]);

  Route::get('/category/edit/{category_id}', [
    'uses'  => 'CatagoryController@editCategory',
    'as'    => 'edit-category'
  ]);

  Route::post('/category/update', [
    'uses'  => 'CatagoryController@updateCategory',
    'as'    => 'update-category'
  ]);

  Route::get('/category/delete/{category_id}', [
    'uses'  => 'CatagoryController@deleteteCategory',
    'as'    => 'delete-category'
  ]);

  Route::get('/brand/add', [
    'uses'  => 'BrandController@index',
    'as'    => 'add-brand'
  ]);

  Route::post('/brand/save', [
    'uses'  => 'BrandController@addNewBrand',
    'as'    => 'new-brand'
  ]);

  Route::get('/product/add', [
    'uses'  => 'ProductController@index',
    'as'    => 'add-product'
  ]);

  Route::post('/product/save', [
    'uses'  => 'ProductController@addNewProduct',
    'as'    => 'new-product'
  ]);

  Route::get('/product/manage', [
    'uses'  => 'ProductController@manageProduct',
    'as'    => 'manage-product'
  ]);

  Route::get('/product/edit/{product_id}', [
    'uses'=> 'ProductController@editProduct',
    'as'  => 'edit-product'
  ]);

  Route::post('/product/update/{product_id}', [
    'uses'=> 'ProductController@updateProduct',
    'as'  => 'update-product'
  ]);

  Route::get('/order/manage-order', [
    'uses'=> 'OrderController@manageOrder',
    'as'  => 'manage-order'
  ]);

  Route::get('/order/manage-order/view/orderDetails/{order_id}', [
    'uses'=> 'OrderController@viewOrderDetails',
    'as'  => 'view-order-details'
  ]);

  Route::get('/order/manage-order/view/orderInvoice/{order_id}', [
    'uses'=> 'OrderController@viewOrderInvoice',
    'as'  => 'view-order-invoice'
  ]);

  Route::get('/order/manage-order/download/orderInvoice/{order_id}', [
    'uses'=> 'OrderController@downloadOrderInvoice',
    'as'  => 'download-order-invoice'
  ]);

  Route::get('/manage/slider', [
    'uses'  => 'MyShopController@manageSlider',
    'as'  => 'manage-slider'
  ]);

  Route::post('/manage/slider/slider-image', [
    'uses'  => 'MyShopController@manageSliderImage',
    'as'  => 'manage-slider-image'
  ]);

  Route::get('/manage/delete/image/slider-image/{slider_image_id}', [
    'uses'  => 'MyShopController@deleteSliderImage',
    'as'  => 'delete-slider-image'
  ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
