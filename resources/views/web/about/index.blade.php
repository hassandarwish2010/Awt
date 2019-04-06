@extends('layouts.layout')
@section('title')
  {{$about->en_name}}
@endsection


@section('meta')
  <meta name="description" content="{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $about->description)) }}">
  <meta name="keywords" content="{{ $about->keywords }}">

  <meta property="og:title" content="{{ $about->en_name }}"/>

  <meta property="og:description" content="{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $about->description)) }}"/>


@endsection


@section('content')
  <section class="about-section-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

        </div>
      </div>
    </div>
  </section>
  <section id="top-list-trip">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <h2>{{$about->en_name}}</h2>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="main-details bx-about2 noowlf">
            <div class="bx-wrapper" style="max-width: 100%;">
              <div class="bx-viewport" style="width: 100%; overflow: hidden;
               position: relative; height: 464px;">

                    <a class="fancybox" rel="group" href="{{$about->image}}">
                      <img src="{{$about->image}}" class="img-responsive" alt="{{$about->en_name}}">
                    </a>


              </div><!-- /main -->
              <div class="col-md-12 details-hotel">
                {!! $about->en_details !!}
              </div>
            </div><!--Close col 12 -->
          </div>
        </div>
      </div>

    </div>
  </section>




@endsection
