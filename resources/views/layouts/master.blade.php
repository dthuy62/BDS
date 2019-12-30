<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Đinh Thanh Huy</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="{{asset('layouts/css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('layouts/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('layouts/css/fontello.css')}}">
        <link href="{{asset('layouts/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
        <link href="{{asset('layouts/fonts/icon-7-stroke/css/helper.css')}}" rel="stylesheet">
        <link href="{{asset('layouts/css/animate.css" rel="stylesheet')}}" media="screen">
        <link rel="stylesheet" href="{{asset('layouts/css/bootstrap-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('layouts/css/icheck.min_all.css')}}">
        <link rel="stylesheet" href="{{asset('layouts/css/price-range.css')}}">
        <link rel="stylesheet" href="{{asset('layouts/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('layouts/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('layouts/css/owl.transitions.css')}}">
        <link rel="stylesheet" href="{{asset('layouts/css/wizard.css')}}">
        <link rel="stylesheet" href="{{asset('layouts/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('layouts/css/responsive.css')}}">
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

      @include('layouts.elements.header')

        <!--End top header -->

       @include('layouts.elements.navbar')
        <!-- End of nav bar -->

        @yield('slide')

        <!-- End Slide -->

        <!-- property area -->
        @yield('content')

        <!--Welcome area -->


        <!--TESTIMONIALS -->




        <!-- boy-sale area -->


        <!-- Footer area-->

        @include('layouts.elements.footer')


        <script src="{{asset('layouts/js/modernizr-2.6.2.min.js')}}"></script>

        <script src="{{asset('layouts/js/jquery-1.10.2.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('layouts/js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('layouts/js/bootstrap-hover-dropdown.js')}}"></script>

        <script src="{{asset('layouts/js/easypiechart.min.js')}}"></script>
        <script src="{{asset('layouts/js/jquery.easypiechart.min.js')}}"></script>

        <script src="{{asset('layouts/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('layouts/js/wow.js')}}"></script>

        <script src="{{asset('layouts/js/icheck.min.js')}}"></script>
        <script src="{{asset('layouts/js/price-range.js')}}"></script>

        <script src="{{asset('layouts/js/main.js')}}"></script>
          <!--  Google Maps Plugin    -->
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_0nosnB4cq9rJtrw19Oqtc-LfOYVlaCo&callback=initMap"
          type="text/javascript"></script>
          <script src="../js/map.js"></script>
    </body>
</html>
