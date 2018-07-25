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
     <link href="{{asset('dist/css/main.css')}}">
     <link href="{{asset('dist/css/responsive.css')}}" rel="stylesheet">
     <link href="{{asset('dist/css/jquiry-ui.css')}}" rel="stylesheet">
     <script src="{{asset('dist/js/vendor/jquery.min.js')}}"></script>
     <script src="{{asset('dist/js/vendor/jquery-1.12.4.js')}}"></script>
     <script src="{{asset('dist/js/vendor/jquery-ui.js')}}"></script>
    <!-- End Vivid -->


       <!-- JS From Vivid -->

      <script src="{{asset('dist/js/jquery.js')}}"></script>
    <script src="js/bootstrap.min.js"></script>

     <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>



    <script src="js/jquery.scrollUp.min.js"></script>



    <script src="{{asset('dist/js/jquery.scrollUp.min.js')}}"></script>


    <script src="js/price-range.js"></script>


    <script src="{{asset('dist/js/price-range.js')}}"></script>

    <script src="js/jquery.prettyPhoto.js"></script>

    <script src="{{asset('dist/js/jquery.prettyPhoto.js')}}"></script>


    <script src="js/main.js"></script>

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
