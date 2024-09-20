<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title>Divano - @yield('title')</title>

    <!--CSS bundle -->
    <link rel="stylesheet" media="all" href="{{asset('web')}}/css/bootstrap.css" />
    <link rel="stylesheet" media="all" href="{{asset('web')}}/css/animate.css" />
    <link rel="stylesheet" media="all" href="{{asset('web')}}/css/font-awesome.css" />
    <link rel="stylesheet" media="all" href="{{asset('web')}}/css/ion-range-slider.css" />
    <link rel="stylesheet" media="all" href="{{asset('web')}}/css/linear-icons.css" />
    <link rel="stylesheet" media="all" href="{{asset('web')}}/css/magnific-popup.css" />
    <link rel="stylesheet" media="all" href="{{asset('web')}}/css/owl.carousel.css" />
    <link rel="stylesheet" media="all" href="{{asset('web')}}/css/theme.css" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="page-loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="wrapper">

        <!-- ======================== Navigation ======================== -->

        @include('web.layouts.includes.header')

        <!-- ========================  Header content ======================== -->

        @yield('content')


        <!-- ================== Footer  ================== -->

        @include('web.layouts.includes.footer')


    </div> <!--/wrapper-->
    
    <!--Scripts -->
    <script src="{{asset('web')}}/js/jquery.min.js"></script>
    <script src="{{asset('web')}}/js/bootstrap.js"></script>
    <script src="{{asset('web')}}/js/ion.rangeSlider.js"></script>
    <script src="{{asset('web')}}/js/magnific-popup.js"></script>
    <script src="{{asset('web')}}/js/owl.carousel.js"></script>
    <script src="{{asset('web')}}/js/tilt.jquery.js"></script>
    <script src="{{asset('web')}}/js/jquery.easypiechart.js"></script>
    <script src="{{asset('web')}}/js/bigtext.js"></script>
    <script src="{{asset('web')}}/js/main.js"></script>
</body>

</html>