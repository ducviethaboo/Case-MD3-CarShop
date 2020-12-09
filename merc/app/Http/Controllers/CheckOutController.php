<?php

namespace App\Http\Controllers;

use App\Models\OrderDetails;
use App\Models\Orders;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckOutController extends Controller
{
    //
    public function checkOut(Request $request)
    {

        //addToOrder
        $cart = $request->session()->get('login');
        $order = new Orders();
        $order->userEmail = $cart[0][1];
        $order->orderDate = Carbon::now()->day . '/' . Carbon::now()->month . '/' . Carbon::now()->year;
        $order->save();
//

        //addToOrderDetail
        $cart = $request->session()->get('cart');
        foreach ($cart->items as $key=>$value) {
        $orderId = DB::table('orders')->where('userEmail', '=', $order->userEmail )->get();
        $orderDetails = new OrderDetails();
        $orderDetails->orderId =  $orderId[0]->id;
        $orderDetails->totalPrice = $cart->totalPrice;
        $orderDetails->totalPrice = $cart->totalPrice;
        $orderDetails->productId = $value['item']->id;
        $orderDetails->quantityOrder = $value['qty'];
        $orderDetails->save();
        }
    }
}
