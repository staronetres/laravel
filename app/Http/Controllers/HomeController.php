<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

     public function __construct() {
        return view('front.home');
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        $categories=Category::all();
        return view('front.home');
    }

     public function shop()
    {
        $products=Product::all();
        $categories=Category::all();
        return view('front.shop',compact(['categories','products']));  

    }

    public function product_details($id)
       

    {
        $products = Product::findOrFail($id);
       
        return view('front.product_details', compact('products'));
        
    }

    // public function shop()
    // {
    //     return view('front.shop');
    // }

    public function contact()
    {
        return view('front.contact');
    }

    
}
