
<?php

?>


<div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner he-slider" >
            @foreach($banners as $banner)
                <?php $class = $loop->first ? 'item active': 'item'; ?>
                <div class="{{$class}}">
                <img src="{{$banner->image}}" width="100%">
                <div class="carousel-caption">
                    <!--heree title and det-->
                </div>
            </div>
           @endforeach
        </div>
        <!-- End Carousel Inner -->
        <ul class="nav nav-pills nav-justified">
            @foreach($banners as $index=>$banner)
                <?php $class2 = $loop->first ? 'active': ''; ?>
                <li data-target="#myCarousel" data-slide-to="{{$index}}" class="{{$class2}}">
                    <a href="#"><b>{{$banner->en_title}}</b>
                        <small>{{  str_replace ('&nbsp;' , ' ' , clean_limit(strip_tags ($banner->en_description),20)) }}</small></a>
                </li>
            @endforeach


        </ul>
    </div>
    <!-- End Carousel -->
</div>