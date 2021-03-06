<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/mystyle.css')}}">

</head>
<body class="app sidebar-mini pace-done sidenav-toggled">
<!-- fixed-top-->
@include('admins.includes.header')
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('admins.includes.sidebar')
<main class="app-content">
    <div class="app-title">
        @include('admins.includes.adminArea')
@yield('content')

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </div>
</main>
@yield('scripts')


{{--<script type="text/javascript" src="{{asset('assets/admin/js/plugins/chart.js')}}"></script>--}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0" integrity="" crossorigin="anonymous"></script>


@yield('charts')


<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('admins.includes.footer')



</body>
</html>
