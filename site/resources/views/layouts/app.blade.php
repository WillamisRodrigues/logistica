<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Vendor styles -->
     <link rel="stylesheet" href="{{asset('vendor\fontawesome\css\font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('vendor\animate.css\animate.css')}}">
    <link rel="stylesheet" href="{{asset('vendor\bootstrap\css\bootstrap.css')}}">

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('styles\pe-icons\pe-icon-7-stroke.css')}}">
    
    <link rel="stylesheet" href="{{asset('styles\pe-icons\helper.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('styles\stroke-icons\style.css')}}">
    <link rel="stylesheet" href="{{asset('styles\style.css')}}">
</head>
<body>
    <div class="wrapper">
        @yield('content')
    </div>

<!-- Vendor scripts -->

<script src="{{asset('vendor\pacejs\pace.min.js')}}"></script>
<script src="{{asset('vendor\jquery\dist\jquery.min.js')}}"></script>
<script src="{{asset('vendor\bootstrap\js\bootstrap.min.js')}}"></script>
<!-- App scripts -->
<script src="{{asset('scripts\luna.js')}}"></script>
</body>
</html>