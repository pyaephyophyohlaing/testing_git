<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class PageController extends Controller
{
    public function mainfun($value='')
    {
    	$items=Item::take(8)->orderBy('id','desc')->get();
       /* dd($items);*/
    	return view('main',compact('items'));

    }

    public function loginfun($value='')
    {
    	
    	return view('login');
    }

    public function registerfun($value='')
    {
    	
    	return view('register');
    }


    public function promotionfun($value='')
    {
    	
    	return view('promotion');
    }

    public function shoppingcartfun($value='')
    {
    	
    	return view('shoppingcart');
    }

    public function subcategoryfun($value='')
    {
    	
    	return view('subcategory');
    }

    public function itemdetailfun($value='')
    {
    	
    	return view('itemdetail');
    }

    public function brandfun($value='')
    {
    	
    	return view('brand');
    }
}
