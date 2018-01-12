@extends('front.master')

@section('content')


details page

<div style="width:20rem">

<img src="{{url('images',$products->image)}}" alt="Card image cap">

<div>

<h4>Card Title</h4>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas</p>

<a href="#">Read More</a>
</div>
</div>

<div class="product-information">
        

         <h2><?php echo ucwords($products->pro_name);?></h2>

         


        
        </div>


@endsection