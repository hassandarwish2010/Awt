<!--start PRODUCT RANGE-->

<section id="top-offerts" class='home4-section' style="background-color:#fff">
    <div class="container">
        <div class="row">
            <div class="col-md-12 effect-5 effects no-border-img">

                <div class="text-center top-txt-title best-promo" style="margin-bottom:50px;margin-top: 10px">
                    <h2> A.W.T PRODUCT RANGE</h2>
                    <div class="separator">
                        <div class="separator-style"></div>
                    </div>

                </div>
            {{----}}
                <!-- FIFTH EXAMPLE -->
                @foreach($productsranges as $pro)
                <div class="col-md-4 trip-travego-disc">


                    <div class="view view-fifth">
                        <figure class="triggerAnimation animated" data-animate="fadeInDown">
                            <div class="img-effect-flash">

                                <a class="fancybox" rel="pro" href="{{asset('public/uploads/'.$pro->image)}}">
                                    <img src="{{asset('public/uploads/thumbs/'.$pro->image)}}" class="img-responsive" alt="{{$pro->en_name}}">
                                </a>
                            </div>
                        </figure>
                        <div class="mask">
                            <div class="main">
                                <div class="trip-title"><h3>{{$pro->en_name}}</h3>

                                </div>
                            </div>
                            <div>
                                <br>
                                <p class="prodetails div_hight_home"> {{  str_replace ('&nbsp;' , ' ' , clean_limit(strip_tags ($pro->en_details),255)) }}
                                </p>

                                <a href="{{ route('product',['permalink'=>$pro->permalink]) }}" class="btn btn-primary btn-block">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach

            </div><!--Close col 12 -->
        </div>
    </div>
</section>
<!--end PRODUCT RANGE-->