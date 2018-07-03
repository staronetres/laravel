<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Gloudemans\Shoppingcart\Facades\Cart;

use App\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index() {
        $cartItems = Cart::content();
        return view('cart.index', compact('cartItems'));
    }

    public function addItem($id) {
         // echo $id;
         $product = Product::findOrFail($id);
         // $products = products::find($id);

         // Cart::add($id, $products->pro_name, 1, $products->pro_price);
         Cart::add($id, $product->pro_name, 1, $product->pro_price, ['img' => $product->image, 'stock' => $product->stock]);
          return back();
    }

    public function destroy($id){
        Cart::remove($id);
        // echo $id;
        return back();
    }

   public function  update(Request $request, $id){
     
      Cart::update($id, $request->qty);
      return back();
    }

}
