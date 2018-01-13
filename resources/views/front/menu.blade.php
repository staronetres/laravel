 

      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
     <a href="{{url('/')}}" class="navbar-brand"><img src="{{URL::asset('dist/img/ecom.png')}}" alt="..."></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        
         
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('/shop')}}">Shop</a>
          </li>

          <li class="nav-item dropdown"><a id="navbarDropdownMenuLink" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Categories<i class="fa fa-angle-down"></i></a>
      <ul aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                 <?php  $cats = DB::table('categories')->get(); ?>
                 @foreach($cats as $cat)
                  <li><a href="{{url('/')}}/products/{{$cat->name}}" class="dropdown-item">{{ucwords($cat->name)}}</a></li>
                @endforeach
               </ul>
                  </li> 

          <li class="nav-item">
            <a class="nav-link disabled" href="{{url('/contact')}}">Contact Us</a>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
            <?php if (Auth::check()) { ?>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">{{Auth::user()->name}}</a>
            <?php } ?>
            <?php if (Auth::check()) { ?>
              <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
               <a class="dropdown-item" href="{{url('/')}}/profile">Profile</a>
            <?php } else { ?>
               <a class="dropdown-item" href="{{url('/login')}}">Login</a>
               <?php } ?>
            </div>
          </li>

        </ul>
        
         <li class="list-inline-item"><a href="{{url('/cart')}}"><i class="fa fa-shopping-cart">View Cart</i>({{Cart::count()}}) ({{Cart::total()}})</a></li>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>