<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\wishList;
use App\recommends;

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

        
        if(Auth::check()){
        $recommends = new recommends;
        $recommends ->uid = Auth::user()->id;
        $recommends ->pro_id = $id;
        $recommends ->save();
        }

        // $products = Product::findOrFail($id);
       
        // return view('front.product_details', compact('products'));

        //  $products = DB::table('products')->where('id',$id)->get();
        // return view('front.product_details', compact('products'));


        $Products = DB::table('products')->where('id',$id)->get();
        return view('front.product_details', compact('Products'));
        
    }

    public function wishlist(Request $request) {

        $wishList = new wishlist;
        $wishList->user_id = Auth::user()->id;
        $wishList->pro_id = $request->pro_id;

        $wishList->save();

        $Products = DB::table('products')->where('id', $request->pro_id)->get();

        return view('front.product_details', compact('Products'));
    }

    public function View_wishList() {

        $Products = DB::table('wishlist')->leftJoin('products', 'wishlist.pro_id', '=', 'products.id')->get();
        return view('front.wishList', compact('Products'));
    }

    public function removeWishList($id) {

        DB::table('wishlist')->where('pro_id', '=', $id)->delete();

        return back()->with('msg', 'Item Removed from Wishlist');
    }


    // public function shop()
    // {
    //     return view('front.shop');
    // }

    public function contact()
    {
        return view('front.contact');
    }

   public function selectSize(Request $request) {
        // echo $request->proDum; // see it in console

        $proDum = $request->proDum;
        $size = $request->size;

        $s_price = DB::table('products_properties')->where('pro_id', $proDum)
        ->where('size', $size)
        ->get();


        foreach($s_price as $sPrice){
            echo "US $ " .$sPrice->p_price;?>

             <input type="hidden" value="<?php echo $sPrice->p_price;?>" name="newPrice"/>
             <div style="background:<?php echo $sPrice->color;?>; width:40px; height:40px"></div>
             <?php
        }
    }

    public function newArrival(){
                  $products = DB::table('products')->where('new_arrival', 1)->paginate(6); // now we are fetching all products
                  return view('front.newArrival', compact('products'));

    }





    
}
