




<div class="text-center top-txt-title best-promo" style="margin-bottom:50px">
    <h2>LATEST NEWS</h2>
    <div class="separator">
        <div class="separator-style"></div>
    </div>

</div>


<section class="team-sec home4-section">
    <div class="container">

        <div class="row">
            <div id="carousel-example" class="carousel slide team team-web-view" data-ride="carousel">
                <div class="carousel-line">
                    <div class="controls pull-right">
                        <a class="left fa fa-angle-left btn" href="#carousel-example" data-slide="prev"></a><a class="right fa fa-angle-right btn " href="#carousel-example" data-slide="next"></a>
                    </div>
                </div>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach ($news->chunk(4) as $key => $new)
                    <div class="{{ $key == 0 ? 'item active' : 'item' }}">
                        <div class="row">
                            @foreach ($new as  $n)
                            <di class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo-shadow"></div>
                                    <div class="photo">

                                        <a class="fancybox" rel="new" href="{{asset('public/uploads/'.$n->image)}}">
                                            <img src="{{asset('public/uploads/thumbs/'.$n->image)}}" class="img_width" alt="{{$n->en_title}}">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <!--<div class="name">Rohit Sharma</div>-->
                                        <div class="mask con-div">
                                            <div class="main">
                                                <div class="des-title">
                                                    <h3 class="titlenewhome">{{$n->en_title}} </h3></div>
                                            </div>
                                            <div class="content jst-div">
                                                <p class="div_hight_home">{{  str_replace ('&nbsp;' , ' ' , clean_limit(strip_tags ($n->en_details),200)) }}</p>

                                                <a href="{{ route('new',['permalink'=>$n->permalink]) }}" class="btn btn-primary btn-block">Read More</a>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </di>
                                @endforeach

                        </div>
                    </div>
                        @endforeach


                </div>
            </div>
        </div>
    </div>
</section>