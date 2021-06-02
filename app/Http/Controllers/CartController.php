<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function addToCart($product_id, Request $request){
      $product=Product::find($product_id);

      Cart::add([
        'id'    => $product->product_id,
        'name'  => $product->product_name,
        'price' => $product->product_price,
        'qty'   => $request->product_quantity,
        'options'=>[
          'product_image' => $product->product_image,
        ]
      ]);

      return redirect('/cart/view');
    }

    public function showCart()
    {
      $cartItems=Cart::content();
      return view('front-end.cart.view-cart', ['cartItems'=>$cartItems]);
    }

    public function removeCartItem($cart_row_id)
    {
      Cart::remove($cart_row_id);

      return redirect('/cart/view')->with('message', 'Item removed from cart');
    }

    public function cartProductQtyUpdate($rowId, Request $request)
    {
      Cart::update($rowId, $request->update_quantity);

      return redirect('/cart/view')->with('message', 'Product quantity updated successfully');
    }
}
