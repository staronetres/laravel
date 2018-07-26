<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function (){
    return view('front/home');
});



Route::get('/about', function (){
    return view('front/about');
});



Route::get('/contact', function (){
    return view('front/contact');
});


Route::get('/products', function (){
    return view('front/shop');
});

Route::get('/product_details/{id}', 'HomeController@product_details');

Route::get('/cart', 'CartController@index');

Route::get('/cart/addItem/{id}', 'CartController@addItem');

Route::get('/shop', function (){
    return view('front/shop');
});
Route::get('/shop','HomeController@shop');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home', 'HomeController@contact')->name('contactus');


Route::post('addToWishList', 'HomeController@wishList')->name('addToWishList');


Route::get('/WishList', 'HomeController@View_wishList');

Route::get('/removeWishList/{id}', 'HomeController@removeWishList');




Route::group(['prefix' => 'admin','middleware'=>['auth','admin']], function () {

  Route::get('/', function () {
    return view('admin.index');
  })->name('admin.index');

   Route::POST('/admin/store', 'AdminController@store');

  Route::get('/admin', 'AdminController@index');


 Route::resource('product','ProductsController');
 Route::resource('category','CategoriesController');

});

Route::get('/cart/addItem/{id}', 'HomeController@product_details');


Route::get('/cart/addItem/{id}', 'CartController@addItem');

Route::get('/cart/remove/{id}', 'CartController@destroy');

Route::put('/cart/update/{id}', 'CartController@update');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


//Star Wars


Route::group(['middleware' => 'auth'], function() {

    Route::get('/checkout', 'CheckoutController@index');
    Route::post('/formvalidate', 'CheckoutController@formvalidate');
    Route::get('/orders', 'ProfileController@orders');
    Route::get('/address', 'ProfileController@address');
    Route::post('/updateAddress', 'ProfileController@UpdateAddress');

    Route::get('/password', 'ProfileController@Password');

    Route::post('/updatePassword', 'ProfileController@updatePassword');

    Route::get('/profile', function() {
        return view('profile.index');
    });

     Route::get('/thankyou', function() {
        return view('profile.thankyou');
    });

});


