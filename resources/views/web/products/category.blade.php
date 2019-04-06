@extends('layouts.layout')

@section('title')
  {{ $cat->en_name }}
@endsection

@section('meta')
  <meta name="description" content="{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $cat->en_details)) }}">
  <meta name="keywords" content="{{ $cat->en_name }}">

  <meta property="og:title" content="{{ $cat->en_name }}"/>

  <meta property="og:description" content="{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $cat->en_details)) }}"/>


@endsection
@section('css')
  <link href="{{ asset('public/css/carousel/component.css') }}" rel="stylesheet" type="text/css" />
  <!--List-->
  <link href="{{ asset('public/css/list/component.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('public/css/layout2.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('public/css/responsive.css') }}" rel="stylesheet" type="text/css" />
  <style>

    @media all and (min-width:0px) and (max-width: 640px) {

    }
  </style>

@endsection
@section('content')


    <section id="top-list-trip">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 effect-5 effects">
                    <div class="main-switcher">
                        <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">


                            <div class="cbp-vm-options">
                                <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid"><i class="fa fa-th-large"></i></a>
                                <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list"><i class="fa fa-th-list"></i></a>
                            </div>

                            <ul id="Grid" class="sandbox">
                                @foreach($products as $pro)
                                <li class="mix category-3" data-value="1250">
                                    <figure>
                                        <div class="cbp-vm-image img">
                                            <a class="fancybox" rel="group" href="{{asset('public/uploads/'.$pro->image)}}">
                                            <img src="{{asset('public/uploads/thumbs/'.$pro->image)}}" class="img-responsive" alt="{{$pro->en_name}}">
                                            </a>


                                        </div>

                                        <figcaption>
                                            <h3>{{$pro->en_name}}</h3>
                                            <div class="clear"></div>
                                            <p class="list_pro">{{  str_replace ('&nbsp;' , ' ' , clean_limit(strip_tags ($pro->en_details),165))}}</p>

                                            <a href="{{ route('product',['id'=>$pro->permalink]) }}" class="btn btn-primary btn-gallery">Read More</a>
                                        </figcaption>
                                    </figure>
                                </li>
                               @endforeach

                            </ul>
                        </div>
                    </div><!-- /main -->
                </div><!--Close col 12 -->
            </div>
        </div>
    </section>

@endsection

@section('js')

  <!--Carousel-->
  <script src="{{asset('public/js/carousel/modernizr.custom.js')}}" type="text/javascript"></script>

  <!--List-->
  <script src="{{asset('public/js/list/cbpViewModeSwitch.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/js/list/classie.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/js/script.js')}}" type="text/javascript"></script>

  <script src="{{asset('public/js/list/jquery.mixitup.js')}}" type="text/javascript"></script>
  <script type="text/javascript">
    $(function () {
      "use strict";
      $('#Grid').mixItUp();
    });
  </script>
  <script>
    $(function () {
      "use strict";
      $("#slider-range").slider({
        range: true,
        min: 0,
        max: 500,
        values: [75, 300],
        slide: function (event, ui) {
          $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
      });
      $("#amount").val("$" + $("#slider-range").slider("values", 0) +
              " - $" + $("#slider-range").slider("values", 1));
    });
  </script>

  <script>
    $(function () {
      "use strict";
      // Clickable Dropdown
      $('.click-nav > ul').toggleClass('no-js js');
      $('.click-nav .js ul').hide();
      $('.click-nav .js').click(function (e) {
        $('.click-nav .js ul').slideToggle(200);
        $('.clicker').toggleClass('active');
        e.stopPropagation();
      });
      $(document).click(function () {
        if ($('.click-nav .js ul').is(':visible')) {
          $('.click-nav .js ul', this).slideUp();
          $('.clicker').removeClass('active');
        }
      });

      $('.click-nav-location > ul').toggleClass('no-js js');
      $('.click-nav-location .js ul').hide();
      $('.click-nav-location .js').click(function (e) {
        $('.click-nav-location .js ul').slideToggle(200);
        $('.clicker').toggleClass('active');
        e.stopPropagation();
      });
      $(document).click(function () {
        if ($('.click-nav-location .js ul').is(':visible')) {
          $('.click-nav-location .js ul', this).slideUp();
          $('.clicker').removeClass('active');
        }
      });
    });
  </script>

  @endsection
