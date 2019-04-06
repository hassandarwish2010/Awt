
<!--====================== footer begin ==================== -->
<?php
   $blogs=App\News::orderBy('id','desc')->paginate(5);
  $setting=App\Setting::first();
$about=App\About::orderBy('id','asc')->first();
$lastnews=App\News::orderBy('id','desc')->paginate(3);
$lastproducts=App\Product::orderBy('id','desc')->paginate(3);
?>

<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3">
                    <img class='logo-footer' src='{{asset('public/images/logo.jpg')}}' alt='logo'/>
                    <p>{{  str_replace ('&nbsp;' , ' ' , clean_limit(strip_tags ($about->en_details),200)) }}</p>
                </div>
                <div class="col-md-3">
                    <h3>LATEST NEWS</h3>
                    @foreach($lastnews as $last)
                    <div class="col-md-4 footer-small-img ">
                        <img alt="{{$last->en_title}}" src="{{asset('public/uploads/thumbs/'.$last->image)}}" class="img-responsive img_footer">
                    </div>
                    <div class="col-md-8 ">
                        <a href="{{ route('new',['permalink'=>$last->permalink]) }}">{{$last->en_title}}</a>

                    </div>
                    <div class="clear"></div>
                        @endforeach
                </div>
                <div class="col-md-3">
                    <h3>Product</h3>
                    @foreach($lastproducts as $lastpro)
                        <div class="col-md-4 footer-small-img ">
                            <img alt="{{$lastpro->en_name}}" src="{{asset('public/uploads/thumbs/'.$lastpro->image)}}" class="img-responsive img_footer">
                        </div>
                        <div class="col-md-8 ">
                            <a href="{{ route('product',['permalink'=>$lastpro->permalink]) }}">{{$lastpro->en_name}}</a>

                        </div>
                        <div class="clear"></div>
                    @endforeach
                </div>
                <div class="col-md-3 footer-zone">
                    <h3>CONTACTS</h3>
                    <p><i class="fa fa-map-marker"></i>{{$setting->address}}</p>
                    <p><i class="fa fa-phone"></i>Phone: {{$setting->phone}}</p>
                    <p><i class="fa fa-envelope-o"></i>Mail: {{$setting->email}}</p>
                    <div class="socialfooter">
                        <a href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a>

                        <a href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a>
                        <a href="{{$setting->linkedin}}"><i class="fa fa-linkedin"></i></a>
                        <a href="{{$setting->googleplus}}"><i class="fa fa-google"></i></a></div>
                </div>


            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-xs-6 copyright"><a href="http://td.com.eg">Typical Design</a> © 2019 All Rights Reserved</div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="{{ asset('public/js/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/js/jquery-1.10.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('public/js/custom1.js') }}"></script>
<script src="{{ asset('public/js/custom2.js') }}"></script>
<script src="{{ asset('public/js/custom3.js') }}"></script>
<!-- waypoint -->
<script type="text/javascript" src="{{ asset('public/js/waypoints.min.js') }}"></script>
<!--Preload-->
<script type="text/javascript">
    $(document).ready(function ($) {
        "use strict";
        try {
            var myTimer = 0;
            clearTimeout(myTimer);
            myTimer = setTimeout(function () {
                $("#loader-wrapper").slideUp()
            }, 2000);
        } catch (err) {
        }
    });
</script>

<script src="{{ asset('public/js/jquery.themepunch.plugins.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>


<script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<!--bxSlider-->
<script src="{{ asset('public/js/jquery.bxslider.js') }}" type="text/javascript"></script>


<script src="{{ asset('public/js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/js/meteo/jquery.zweatherfeed.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        "use strict";
        $('#meteo1').weatherfeed(['UKXX0085', 'CAXX0518', 'CHXX0049', 'ITXX0006', 'CAXX0504', 'JAXX0085'], {
            forecast: true
        });
    });
</script>
<script src="{{ asset('public/js/fancybox/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('public/js/fancybox/jquery.mousewheel.pack.js') }}"></script>
<script src="{{ asset('public/js/fancybox/jquery.fancybox.custom.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $(".fancybox").fancybox();


    });
</script>
@yield('js')

</body>

</html>