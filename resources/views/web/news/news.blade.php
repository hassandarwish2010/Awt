@extends('layouts.layout')
@section('title')
  Blog
@endsection
@php

  $about=App\About::orderBy('id','asc')->first();
@endphp

@section('meta')
  <meta name="description" content="{{ $setting->description}}">
  <meta name="keywords" content="{{ $setting->keywords }}">
  <meta property="og:description" content="{{ $setting->description}}"/>

  <meta name="author" content="Typical Design">
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

<section id="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12 effect-5 effects">
        @isset($news)
        @foreach($news as $new )
        <div class="blog-view view-fifth">
          <div class="img">
            <div class="entry-date">
              <label class="date">{{ $new->created_at->format('d') }}</label>
              <label class="month">{{ $new->month }}</label>

            </div>
            <a class="fancybox" rel="news" href="{{ $new->image }}">
              <img src="{{ $new->image }}" class="img-responsive" alt="{{ $new->en_title }}">
            </a>
            <div class="">
              <a href="#" class="expand">+</a>
              <a class="close-overlay hidden">x</a>
            </div>
          </div>
          <div class="blog-img-title">
           <a href="{{ route('new', [ 'permalink' => $new->permalink]) }}"><h3>{{ $new->en_title }}</h3></a>
            <p>{{  str_replace ('&nbsp;' , ' ' , clean_limit(strip_tags ($new->description),408)) }}</p>

          </div>
        </div>
          @endforeach
          @endif

      </div><!--Close col 12 -->
       <div class="text-center">{{$news->links()}}</div>
    </div>

  </div>

</section>

  <!-- content close -->



@endsection
