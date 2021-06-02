<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Order;
use App\Customer;
use App\Shipping;
use App\Payment;
use App\OrderDetail;
use PDF;

class OrderController extends Controller
{
    public function manageOrder(){
      $orders=DB::table('orders')
              ->join('customers', 'customers.customer_id', '=', 'orders.customer_id')
              ->join('payments', 'payments.order_id', '=', 'orders.order_id')
              ->select('orders.*', 'customers.first_name', 'customers.last_name', 'payments.payment_type', 'payments.payment_status' )
              ->get();

      return view('Admin.order.manage-order', ['orders'=>$orders]);
    }

    public function viewOrderDetails($order_id){
      $order=Order::find($order_id);
      $customer=Customer::find($order->customer_id);
      $shipping=Shipping::find($order->shipping_id);
      $payment=Payment::where('order_id', $order->order_id)->first();
      $orderDetails=OrderDetail::where('order_id', $order->order_id)->get();

      return view('admin.order.view-order-details', [
        'order'  =>$order,
        'customer'=>$customer,
        'shipping'=>$shipping,
        'payment'=>$payment,
        'orderDetails'=>$orderDetails,

      ]);
    }

    public function viewOrderInvoice($order_id){
      $order=Order::find($order_id);
      $customer=Customer::find($order->customer_id);
      $shipping=Shipping::find($order->shipping_id);
      //$payment=Payment::where('order_id', $order->order_id)->first();
      $orderDetails=OrderDetail::where('order_id', $order->order_id)->get();

      return view('admin.order.view-order-invoice', [
        'order'  =>$order,
        'customer'=>$customer,
        'shipping'=>$shipping,
        //'payment'=>$payment,
        'orderDetails'=>$orderDetails,
      ]);
    }

    public function downloadOrderInvoice($order_id){
      $order=Order::find($order_id);
      $customer=Customer::find($order->customer_id);
      $shipping=Shipping::find($order->shipping_id);
      $orderDetails=OrderDetail::where('order_id', $order->order_id)->get();

      $pdf=PDF::loadView('admin.order.download-order-invoice', [
        'order'  =>$order,
        'customer'=>$customer,
        'shipping'=>$shipping,
        'orderDetails'=>$orderDetails,
      ]);
      return $pdf->stream('My_Shop_Order_invoice.pdf');
    }
}
