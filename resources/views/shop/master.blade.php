
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('templateUser/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('templateUser/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('templateUser/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('templateUser/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('templateUser/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('templateUser/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('templateUser/css/responsive.css')}}" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="{{asset('templateUser/js/html5shiv.js')}}"></script>
    <script src="{{asset('templateUser/js/respond.min.js')}}"></script>

    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
@include('sweetalert::alert')
@include('shop.layouts.navbar')


@yield('content')

@include('shop.layouts.footer')
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<script src="{{asset('templateUser/js/jquery.js')}}"></script>
<script src="{{asset('templateUser/js/bootstrap.min.js')}}"></script>
<script src="{{asset('templateUser/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('templateUser/js/price-range.js')}}"></script>
<script src="{{asset('templateUser/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('templateUser/js/main.js')}}"></script>
</body>
</html>

