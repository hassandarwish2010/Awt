<!doctype html>

<html>

<head>
 <title>Advance Water Treatment/@yield('title')</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="author" content="Typical Design">
 @yield('meta')
 <link rel="shortcut icon" href="{{ asset('public/images/logo.jpg') }}">
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300'
       rel='stylesheet' type='text/css'/>
 <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet'
       type='text/css'/>
 <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
       rel='stylesheet' type='text/css'/>
 <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic'
       rel='stylesheet' type='text/css'/>


 <link href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
 <link href="{{ asset('public/css/font-awesome-4.4.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
 <link href="{{ asset('public/css/jquery-ui-1.10.4.custom.min.css') }}" rel="stylesheet" type="text/css"/>
 <link href="{{ asset('public/css/animate.css') }}" rel="stylesheet" type="text/css"/>
 <link href="{{ asset('public/css/settings_slide2.css') }}" rel="stylesheet" type="text/css"/>
 <link href="{{ asset('public/css/travel-mega-menu.css') }}" rel="stylesheet" type="text/css"/>
 <link href="{{ asset('public/css/jquery.bxslider.css') }}" rel="stylesheet" type="text/css"/>
 <link href="{{ asset('public/css/meteo/example.css') }}" rel="stylesheet" type="text/css"/>
 <link href="{{ asset('public/css/layout2.css') }}" rel="stylesheet" type="text/css"/>
 <link href="{{ asset('public/css/responsive.css') }}" rel="stylesheet" type="text/css"/>
 <link href="{{ asset('public/css/customslider1.css') }}" rel="stylesheet" type="text/css"/>
 <link href="{{ asset('public/css/customslider2.css') }}" rel="stylesheet" type="text/css"/>
 <!--<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
 <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 @yield('css')
<!-- Fancybox -->
 <link type="text/css" rel='stylesheet' href="{{ asset('public/js/fancybox/jquery.fancybox.css') }}">
 <!-- End Fancybox -->
 <!-- Fancybox -->

 <!-- End Fancybox -->
 <style>

  @media all and(min-width:0px) and(max-width:650px) {
   .he-slider {
    height: 150px !important;

   }

  }
 </style>


</head>

<body>

<div id="loader-wrapper">
 <div id="loader"></div>
</div>
@include('layouts.navbar')
@include('layouts.header')
{{--@include('layouts.slider')--}}
{{--@include('layouts.blog')--}}
{{--@include('layouts.informations')--}}
{{--@include('layouts.projects')--}}
{{--@include('layouts.discover')--}}
{{--@include('layouts.progress')--}}
@yield('content')
@include('layouts.footer')





