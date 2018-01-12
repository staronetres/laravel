@extends('front.master')
 @section('content')


 <main role="main">
<br>
<br>
<br>
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary">Main call to action</a>
            <a href="#" class="btn btn-secondary">Secondary action</a>
          </p>
        </div>
      </section>

      <div class="album text-muted">

      <div class="container">
       
        <div class="row">
         @forelse($products as $product)
           
          <div class="card" style="width:30rem height: 20rem">
         
             <img src="{{url('images',$product->image)}}" class="card-img">
            
          

            <p class="card-text">{{$product->pro_name}}</p>
             
            <button class="btn btn-primary addcart">
             <a href="{{url('/product_details')}}/<?php echo $product->id; ?>" class="add-to-cart addcart">View Product</a>
           </button>
            
            <button class="btn btn-primary btn-sm">
             <a href="{{url('/cart/addItem')}}/<?php echo $product->id; ?>" class="add-to-cart addcart">Add ToCart<i class="fa fa-shopping-cart"></i></a>
            </button>
         
          
          </div>
          @empty
            <h3>No Shirts</h3>
            @endforelse
          </div>
         </div>
         
        </div>

      </div>

    </main>
    @endsection