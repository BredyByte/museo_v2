<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top">
                    <div class="nav_outer">
                        <div class="bar mmenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        @include('layouts._nav')
                        @include('layouts.basket')
                    </div>
                </div>
                <div class="head">

                    <div class="logo_big">
                        <!--<i class="micon micon-logo"></i>-->
                        <img class="logo"  src={{asset("images/logo_big.png")}}>
                    </div>
                    <div class="txtbl_big">
                        <h1><? echo trans('home.museum');?></h1>
                        {{--<a href="/" class="main_btn bttn transbtn">КУПИТЬ БИЛЕТЫ</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <video autoplay loop muted class="bgvideo" poster={{asset("images/poster.jpg")}}>
        <source src="{{asset('video/fibernew.ogv')}}" type='video/ogg; codecs="theora, vorbis"'>
        <source src="{{asset('video/fibernew.mp4')}}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        <source src="{{asset('video/fibernew.webm')}}" type='video/webm; codecs="vp8, vorbis"'>
    </video>
</header>