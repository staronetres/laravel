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





<div class="thumbnail">
             <img src="{{url('images',$products->image)}}" class="card-img">
                                <br>
</div>
</div>
<div class="col-md-5 col-md-offset-1">

<div class="product-details">

<h2 class="product-title">
 <h2><?php echo ucwords($products->pro_name);?></h2>
 </h2>

 
<button class="btn btn-primary btn-sm">
<a href="{{url('/cart/addItem')}}/<?php echo $products->id; ?>" class="add-to-cart addcart">Add ToCart<i class="fa fa-shopping-cart"></i></a>
</button>

<p class="">
 
<i class="fa fa-shopping-cart"></i>

</div>
</div>
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
