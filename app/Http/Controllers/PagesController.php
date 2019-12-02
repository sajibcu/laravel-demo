<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    //
    public function index()
    {
    	return view('index');
    }
    public function contact()
    {
    	return view('contact');
    }
    public function product()
    {
    	$products = Product::orderBy('id','desc')->get();
    	return view('product')->with('products',$products);
    }
}
