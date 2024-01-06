@extends('layouts.app')
@section('title',$title)
@section('body_class','main')
@section('_header')
    @include('layouts._header')
    @endsection

@section('content')
    <div class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 fb">
                    <div class="txt_outer">
                        <p><?= trans('home.p1');?></p>
                            <p><?= trans('home.p2');?></p>
                            <p><?= trans('home.p3');?></p>
                            <p><?= trans('home.p4');?></p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 sb">
                    <div class="big_gallery">
                        <div id="big_gallery" class="carousel slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('images/slides/1.jpeg')}}"
                                         alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('images/slides/2.jpeg')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"   src="{{asset('images/slides/3.jpeg')}}" alt="First slide">
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#big_gallery" data-slide-to="0" class="active"></li>
                                <li data-target="#big_gallery" data-slide-to="1"></li>
                                <li data-target="#big_gallery" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection