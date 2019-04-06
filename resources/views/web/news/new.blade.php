@extends('layouts.layout')
@section('title')
  {{$news->en_title}}
@endsection
@section('meta')
  <meta name="description" content="{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $news->description)) }}">
  <meta name="keywords" content="{{ $news->keywords }}">

  <meta property="og:title" content="{{ $news->en_name }}"/>

  <meta property="og:description" content="{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $news->description)) }}"/>


@endsection
@php


  $about=App\About::orderBy('id','asc')->first();

@endphp





@section('content')
  <section class="about-section-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

        </div>
      </div>
    </div>
  </section>
  {{--====================================--}}
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12 effect-5 effects">

              <div class="blog-view view-fifth">
                <div class="img">
                  <div class="entry-date">
                    <label class="date">{{ $news->created_at->format('d') }}</label>
                    <label class="month">{{ $news->month }}</label>

                  </div>
                  <a class="fancybox" rel="news" href="{{ $news->full_image }}">
                    <img src="{{ $news->image }}" class="img-responsive" alt="{{ $news->en_title }}">
                  </a>
                  <div class="">
                    <a href="#" class="expand">+</a>
                    <a class="close-overlay hidden">x</a>
                  </div>
                </div>
                <div class="blog-img-title">
                  <h3>{{ $news->en_title }}</h3>
                  <p>{!! $news->description !!}</p>
                </div>
              </div>


        </div><!--Close col 12 -->

      </div>

    </div>

  </section>


@endsection
