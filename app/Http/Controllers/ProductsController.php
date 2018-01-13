<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Category;
use App\about;

use App\Product;

use App\altimages;

use Illuminate\Http\Request;

use Storage;



use Image;

use App\products_properties;


class ProductsController extends Controller
{



   //    public function index()
   // {
   //  return view('admin.index');
   // }

     public function index()
    {
        $products=Product::all();
        return view('admin.product.index',compact('products'));
    }

   // public function cats() {
   //   return view('admin.index');
   // }

   // public function index() {
   
   //    $cat_data = DB::table('pro_cat')->get();
   //    // $Products = DB::table('products')->get();
   //    // $cat_data=Pro_cat::all();
   //      // return view('admin.home');
   //      return view('admin.home', compact('cat_data'));
   //  }

   public function create()
    {
        $categories=Category::pluck('name','id');
        return view('admin.product.create',compact('categories'));
    }

    //  public function home()
    // {
    //   $cat_data = DB::table('pro_cat')->get();
    //     // return view('admin.home');
    //     return view('admin.home', compact('cat_data'));
    // }

    // public function addpro_form(){
    //   $cat_data = DB::table('pro_cat')->get();

    //   return view('admin.home', compact('cat_data'));
    // }


    //  public function cats()
    // {
    //     return view('admin.home');
    // }

    // public function addpro_form(){
    //   $cat_data = DB::table('pro_cat')->get();

    //   return view('admin.home', compact('cat_data'));
    // }



   public function store(Request $request) 

    {


        $formInput=$request->except('image');
//        validation
      
        $this->validate($request,[
            'pro_name'=>'required',
            'pro_code'=>'required',
            'pro_price'=>'required',
            'pro_info'=>'required',
            'spl_price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        
      
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }
     
        $categories=Category::all();
        Product::create($formInput);
        // return redirect()->route('admin.index');
        return redirect()->back();

}


public function show($id)
    {
        $product = Product::findOrFail($id);
        // $blog = Blog::whereSlug($slug)->first();
        return view('product.show', compact('products'));
        // var_dump($product);
    }



    



}