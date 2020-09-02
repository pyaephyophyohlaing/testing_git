<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class BackendController extends Controller
{
      public function dashboardfun($value='')
    {
    	
    	return view('Backend.dashboard');
    }

     public function orderlist($value='')
    {
    	$orders=Order::all();
    	
    	return view('Backend.order.index',compact('orders'));
    }

     public function orderdetail($id)
    {
    	$orderdetail=Order::find($id);

    	return view('Backend.order.orderdetail',compact('orderdetail'));
    }

}
