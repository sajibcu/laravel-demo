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
    	return view('products')->with('products',$products);
    }

    public function product_add()
    {
        // $products = Product::orderBy('id','desc')->get();
        return view('product');
    }

    public function product_store(Request $request)
    {
        // $products = Product::orderBy('id','desc')->get();
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        $file = $request->file('file');
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = 1;
        $product->brand_id = 1;
        $product->price = 0;
        $product->quantity = 1;
        $product->status = 1;
        $product->slug =$file->getClientOriginalName();
        $product->save();

        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());

        return view('product');
    }
}
