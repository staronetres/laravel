<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->

    <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>
    
    <link rel="stylesheet" href="{{asset('dist/css/album.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/carousel.css')}}">
    <link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet">


    <!-- CSS From Vivid -->
    
     <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/price-range.css')}}" rel="stylesheet">
     <link href="{{asset('dist/css/animate.css')}}" rel="stylesheet">
     <link href="{{asset('dist/css/main.css')}}" rel="stylesheet">
     <link href="{{asset('dist/css/responsive.css')}}" rel="stylesheet">
     <script src="{{asset('dist/js/vendor/jquery.min.js')}}"></script>
   
    <!-- End Vivid -->


    <!-- Slick From Vivid -->
   <!--  <link href="{{asset('dist/css/slick.css')}}"> -->
    <link href="{{asset('dist/css/slick-theme.css')}}">
    <link href="{{asset('dist/js/slick.js')}}">
    <link href="{{asset('dist/js/jquery-3.2.1.js')}}">
    <!-- <link href="{{asset('dist/js/slick.min.js')}}"> -->
     <!-- JS From Vivid -->


       <!-- JS From Vivid -->

      <script src="{{asset('dist/js/jquery.js')}}"></script>
   

     <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>







    <script src="{{asset('dist/js/jquery.scrollUp.min.js')}}"></script>




    <script src="{{asset('dist/js/price-range.js')}}"></script>

  

    <script src="{{asset('dist/js/jquery.prettyPhoto.js')}}"></script>


   <script src="{{asset('dist/js/main.js')}}"></script>

    




       <!-- JS From Vivid -->
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

   <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      
    </header>

   @include('front.menu')
   @yield('content')

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".vertical-center-4").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
      });
      $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script>


    

    @yield('scripts')
  </body>
</html>
