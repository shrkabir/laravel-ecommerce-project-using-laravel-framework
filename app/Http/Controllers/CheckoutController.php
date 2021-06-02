<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Customer;
use App\Shipping;
use App\Order;
use App\OrderDetail;
use App\Payment;
use Cart;

class CheckoutController extends Controller
{
    public function index()
    {
      return view('front-end.checkout.checkout-content');
    }

    public function customerRegistration(Request $request)
    {
      $this->validate($request, [
        'email' =>'email|unique:customers,email'
      ]);

      $customer=new Customer();

      $customer->first_name   =$request->first_name;
      $customer->last_name    =$request->last_name;
      $customer->email        =$request->email;
      $customer->password     =bcrypt($request->password);
      $customer->phone        =$request->phone_number;
      $customer->address      =$request->address;

      $customer->save();

      $customer_id=$customer->customer_id;
      Session::put('customer_id', $customer_id);
      Session::put('customer_name', $customer->first_name.' '.$customer->last_name);

      $customer_data_array=$customer->toArray();

      /*Mail::send('front-end.emails.confirmation-email', $customer_data_array, function($message) use($customer_data_array){
        $message->to($customer_data_array['email']);
        $message->subject('confirmation email');
      });*/

      return redirect('/checkout/shipping');
    }

    public function customerLogin(Request $request)
    {
      $customer=Customer::where('email', $request->email)->first();

      if(password_verify($request->password, $customer->password))
      {
        Session::put('customer_id', $customer->customer_id);
        Session::put('customer_name', $customer->first_name.' '.$customer->last_name);

        return redirect('/checkout/shipping');
      }
      else
      {
        return redirect('/checkout')->with('message', 'Invalid password');
      }
    }

    function customerLogout(){
      Session::forget('customer_id');
      Session::forget('customer_name');

      return redirect('/');
    }

    function customerLoginHome(){
      return view('front-end.customer.customer-login');
    }

    public function goToShipping(){
      $customer_info=Customer::find(Session::get('customer_id'));
      return view('front-end.checkout.shipping', [
        'customer_info'=>$customer_info
      ]);
    }

    public function saveShippingInfo(Request $request){
      $shipping=new Shipping;

      $shipping->full_name=$request->full_name;
      $shipping->email=$request->email;
      $shipping->phone_number=$request->phone_number;
      $shipping->shipping_address=$request->shipping_address;
      $shipping->save();

      Session::put('shipping_id', $shipping->shipping_id);
      return redirect('/checkout/payment');
    }

    public function goToPayment(){
      return view('front-end.checkout.payment');
    }

    public function newOrder(Request $request){
      $payment_type=$request->payment_type;
      if($payment_type=='Cash')
      {
        $order=new Order();
        $order->customer_id =Session::get('customer_id');
        $order->shipping_id =Session::get('shipping_id');
        $order->order_total =Session::get('order_total');
        $order->save();

        $payment=new Payment();
        $payment->order_id      =$order->order_id;
        $payment->payment_type  =$payment_type;
        $payment->save();

        $cartContents=Cart::content();
        foreach($cartContents as $cartContent)
        {
          $orderDetail=new OrderDetail();
          $orderDetail->order_id      =$order->order_id;
          $orderDetail->product_id    =$cartContent->id;
          $orderDetail->product_name  =$cartContent->name;
          $orderDetail->product_price =$cartContent->price;
          $orderDetail->product_quantity  =$cartContent->qty;
          $orderDetail->save();
        }

        Cart::destroy();

        return redirect('/complete/order');
      }
      else if($payment_type=='Paypal')
      {

      }
      if($payment_type=='Bkash')
      {

      }
    }

    public function completeOrder(){
      return view('front-end.checkout.complete-order');
    }

}
