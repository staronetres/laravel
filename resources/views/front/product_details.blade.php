@extends('front.master')

@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br> 



<div class="container align-vertical hero">
<div class="row">
<div class="col-md-5 text-left">


</div>
</div><!--end of row-->
</div><!--end of container-->
</header>


 

  <section id="index-amazon">

 
    <div class="amazon">
<div class="container">

<div class="row">
<div class="col-md-12">
<div class="product">
<div class="row">
<div class="col-md-6 col-xs-12">


@foreach($Products as $product)


<div class="thumbnail">
             <img src="{{url('images',$product->image)}}" class="card-img">
                                <br>



</div>



<!-- ALT IMAGE  -->

 <div id="similar-product" class="carousel slide" data-ride="carousel">
                                
                                  <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                          <a href=""><img src="{{url('images',$product->image)}}" alt=""></a>
                                          
                                        </div>
                                        <div class="item">
                                          <a href=""><img src="{{url('images',$product->image)}}" alt=""></a>
                                          
                                        </div>
                                        <div class="item">
                                          <a href=""><img src="{{url('images',$product->image)}}" alt=""></a>
                                         
                                        </div>
                                        
                                    </div>

                                  <!-- Controls -->
                                  <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                  </a>
                                  <a class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                  </a>
                            </div>






</div>
<div class="col-md-5 col-md-offset-1">

<div class="product-details">

<h2 class="product-title">
 <h2><?php echo ucwords($product->pro_name);?></h2>
 <h5>{{$product->pro_info}}</h5>

 <h2>${{$product->spl_price}}</h2>
 </h2>
 <p><b>Availability:</b>{{$product->stock}} In Stock</p>
 
<button class="btn btn-primary btn-sm">
<a href="{{url('/cart/addItem')}}/<?php echo $product->id; ?>" class="add-to-cart addcart">Add ToCart<i class="fa fa-shopping-cart"></i></a>
</button>

<?php

 $wishData = DB::table('wishlist')->rightJoin('products','wishlist.pro_id', '=', 'products.id')->where('wishlist.pro_id', '=', $product->id)->get();


 $count = App\wishlist::where(['pro_id' => $product->id])->count();



  ?>

 <?php if($count=="0"){?>

   {!! Form::open(['route' => 'addToWishList', 'method' => 'post']) !!}
    <input type="hidden" value="{{$product->id}}" name="pro_id"/>
    <input type="submit" value="Add to Wishlist" class="btn btn-primary"/>



   {!! Form::close() !!}
  <?php } else {?>
     <h3 style="color:green">Already Added to Wishlist <a href="{{url('/WishList')}}">wishlist</a></h3>
<?php }?>
<p class="">
 


</div>
</div>

@endforeach
</div>
</div>
</div>
</div><!-- /.row -->

        </div>
        </div>
      </section>


      <div class="no-padding-top section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="load-more"><i class="fa fa-ellipsis-h"></i></a>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div>

@endsection
