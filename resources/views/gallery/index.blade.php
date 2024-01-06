@extends('layouts.app')
@section('title',$title)
@section('body_class','shoppage gallery')
@section('_header')
    @include('layouts._header2')
@endsection
@section('content')
    <section id="cont">
        <div class="top_bl">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="txtbl_big">
                            <h1><?=trans('gallery.gallery')?></h1>
                            <div class="figure1">
                                <img src="{{asset('images/figure1.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="big_gallery">
                            <div id="big_gallery" class="carousel slide" data-ride="carousel" data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('images/first_slide.jpg')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/second_slide.jpg')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('images/DSC_2936.jpg')}}" alt="First slide">
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
        <div class="gallery_bl gridp20">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/1.jpeg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/1.jpeg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/2.jpg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/2.jpg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/3.jpeg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/3.jpeg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/image_last/full/4.JPG')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/image_last/full/4.JPG')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/image_last/full/5.JPG')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/image_last/5.JPG')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/image_last/full/6.JPG')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/image_last/6.JPG')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/image_last/full/7.JPG')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/image_last/7.JPG')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/image_last/full/8.JPG')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/image_last/8.JPG')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/image_last/full/9.JPG')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/image_last/9.JPG')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/10.jpeg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/10.jpeg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/11.JPG')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/11.JPG')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/12.jpg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/12.jpg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/13.jpeg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/13.jpeg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/14.jpeg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/14.jpeg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/15.jpeg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/15.jpeg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/16.jpeg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/16.jpeg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/17.jpeg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/17.jpeg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/18.jpeg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/18.jpeg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/19.jpeg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/19.jpeg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/20.jpeg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/20.jpeg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/21.jpeg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/21.jpeg')}}" alt="First">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elem_outer elem_blure">
                            <a class="element" data-fancybox="gallery" href="{{asset('images/gallery/22.jpeg')}}">
                                <i class="micon micon-eye transbtn"></i>
                                <div class="over transbtn"></div>
                                <img class="elem_img" src="{{asset('images/gallery/22.jpeg')}}" alt="First">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection