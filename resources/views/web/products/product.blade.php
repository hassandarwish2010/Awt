@extends('layouts.layout')


@section('title')
  {{$product->en_name}}
@endsection


@section('meta')
  <meta name="description" content="{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $product->description)) }}">
  <meta name="keywords" content="{{ $product->keywords }}">

  <meta property="og:title" content="{{ $product->en_name }}"/>

  <meta property="og:description" content="{{ str_replace ('&nbsp;' , ' ' , strip_tags ( $product->description)) }}"/>


@endsection


@section('content')
  {{--====================================--}}
<div>
  {{--<section id="top-list-trip">--}}
    {{--<div class="container">--}}
      {{--<div class="row">--}}
        {{--<div class="col-sm-12 col-md-12">--}}
          {{--<h2>{{$product->en_name}}</h2>--}}
        {{--</div>--}}
        {{--<div class="col-sm-12 col-md-12">--}}
          {{--<div class="main-details bx-about2 noowlf">--}}
            {{--<div class="bx-wrapper" style="max-width: 100%;">--}}
              {{--<div class="bx-viewport" style="width: 100%; overflow: hidden;--}}
               {{--position: relative; height: 464px;">--}}
                {{--<ul class="bxslider" style="width: 1015%; position: relative; transition-duration: 0s; transform: translate3d(-1696px, 0px, 0px);">--}}
                  {{--<li style="float: left; list-style: none; position: relative; width: 848px;" class="">--}}
                    {{--<img src="{{$product->image}}" alt=""></li>--}}
                  {{--@isset($images)--}}
                    {{--@foreach($images as $img)--}}
                      {{--<li style="float: left; list-style: none; position: relative; width: 848px;">--}}
                        {{--<img src="{{ asset('public/uploads/thumbs2/'.$img->image) }}" alt="">--}}
                      {{--</li>--}}
                    {{--@endforeach--}}
                  {{--@endisset--}}
                {{--</ul>--}}
                {{--<div id="bx-pager">--}}
                  {{--<a data-slide-index="0" href="#" class=""><img src="{{$product->image}}" alt=""></a>--}}
                  {{--@isset($images)--}}
                    {{--@foreach($images as $img)--}}
                      {{--<a data-slide-index="0" href="#" class="active"><img src="{{ asset('public/uploads/thumbs2/'.$img->image) }}" alt=""></a>--}}

                    {{--@endforeach--}}
                  {{--@endisset--}}

                {{--</div>--}}
              {{--</div><!-- /main -->--}}
              {{--<div class="col-md-12 details-hotel">--}}
                {{--{!! $product->en_details !!}--}}
              {{--</div>--}}
            {{--</div><!--Close col 12 -->--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}

    {{--</div>--}}
  {{--</section>--}}
</div>

  <section class="about-section-top">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </section>
  <section id="top-list-trip">
    <div class="container">
      <div class="row">

        <div class="col-sm-12 col-md-12">
          <h2>{{$product->en_name}}</h2>
          <div class="main-details bx-about2 noowlf">
            @if(count($images)>0)
            <ul class="bxslider">
              <li><img src="{{$product->image}}" alt=""/></li>
              @foreach($images as $img)
              <li><img src="{{ asset('public/uploads/thumbs/'.$img->image) }}" alt="{{$product->en_name}}"/></li>
              @endforeach
            </ul>
              @else
              <a class="fancybox" rel="product" href="{{ $product->image }}">
                <img src="{{ $product->image }}" class="img-responsive" alt="{{ $product->en_name }}">
              </a>
            @endif

            <!-- /main -->
          <div class="col-md-12 details-hotel" style="width: 100%">
          {!! $product->en_details !!}
          </div>
        </div><!--Close col 12 -->
      </div>
    </div>
  </section>


  {{--==================================--}}
<div>
  {{--<section id="top-list-trip">--}}
    {{--<div class="container">--}}
      {{--<div class="row">--}}

        {{--<div class="col-sm-12 col-md-12">--}}
          {{--<div class="main-details bx-about2 noowlf">--}}
            {{--<div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden;--}}
             {{--position: relative; height: 464px;">--}}
                {{--<ul class="bxslider" style="width: 1015%; position: relative; transition-duration: 0s; transform: translate3d(-1696px, 0px, 0px);">--}}
                  {{--<li style="float: left; list-style: none; position: relative; width: 848px;" class="bx-clone">--}}
                    {{--<img src="{{$product->image}}" alt=""></li>--}}
                  {{--@isset($images)--}}
                    {{--@foreach($images as $img)--}}
                      {{--<li style="float: left; list-style: none; position: relative; width: 848px;">--}}
                        {{--<img src="{{ asset('public/uploads/thumbs/'.$img->image) }}" alt="">--}}
                      {{--</li>--}}
                    {{--@endforeach--}}
                  {{--@endisset--}}
                {{--</ul>--}}
                {{--<div id="bx-pager">--}}
                {{--<a data-slide-index="0" href="#" class=""><img src="{{$product->image}}" alt=""></a>--}}
                {{--@isset($images)--}}
                {{--@foreach($images as $index=>$img)--}}
                {{--<a data-slide-index="{{$index+1}}" href="#" class="{{$index==1?'active':''}}"><img src="{{ asset('public/uploads/thumbs/'.$img->image) }}" alt="ffff"></a>--}}


                {{--@endforeach--}}
                {{--@endisset--}}
                {{--<a data-slide-index="1" href="#" class="active"><img src="images/hotel/thumb2.jpg" alt=""></a>--}}
                {{--<a data-slide-index="2" href="#" class=""><img src="images/hotel/thumb3.jpg" alt=""></a>--}}
                {{--<a data-slide-index="3" href="#" class=""><img src="images/hotel/thumb4.jpg" alt=""></a>--}}
                {{--<a data-slide-index="4" href="#" class=""><img src="images/hotel/thumb5.jpg" alt=""></a>--}}
                {{--<a data-slide-index="5" href="#" class=""><img src="images/hotel/thumb6.jpg" alt=""></a>--}}
                {{--<a data-slide-index="6" href="#" class=""><img src="images/hotel/thumb7.jpg" alt=""></a>--}}
                {{--<a data-slide-index="7" href="#" class=""><img src="images/hotel/thumb8.jpg" alt=""></a>--}}
                {{--</div>--}}
              {{--</div><!-- /main -->--}}
              {{--<div class="col-md-12 details-hotel">--}}
                {{--{!! $product->en_details !!}--}}
              {{--</div>--}}
            {{--</div><!--Close col 12 -->--}}
          {{--</div>--}}
        {{--</div>--}}
  {{--</section>--}}
</div>


@endsection
