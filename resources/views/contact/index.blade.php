@extends('layouts.app')
@section('title',$title)
@section('body_class','shoppage contacts')
@section('_header')
    @include('layouts._header2')
@endsection
@section('content')
    <section id="cont">
        <div class="contakti_bl">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contakti_outer">
                            <div class="phone">
                                <i class="micon  micon-iphone"></i>
                                <p>+34 951 50 13 19</p>
                                <p>+34 661 23 94 04</p>
                            </div>
                            <div class="mail">
                                <i class="micon micon-latter"></i>
                                <p>info@museoimaginacion.com</p>
                            </div>
                                                    </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form_outer">
                            {!! Form::open(['route'=>'send','method'=>'post','class'=>'forma']) !!}

                                <div class="row1">
                                    <input class="lead_name my_input" name="name" type="text" required="" placeholder="<?=trans('contact.name')?>">
                                    <input class="lead_email my_input" name="phone" type="text" required="" placeholder="<?=trans('contact.phone')?>">
                                </div>
                                <div class="row2">
                                    <input class="lead_email my_input" name="email" type="email" required="" placeholder="<?=trans('contact.email')?>">
                                </div>
                                <textarea class="lead_name my_tarea" required="" name="message" type="text"></textarea>
                                <div class="g-recaptcha" data-sitekey="6LdF-rkZAAAAAMIT3Ie5oxqHIPQ0_kIac4k0n6ag" data-callback="correctCaptcha"></div>
                                <input
                                        type="submit"
                                        class="form-bttn bttn transbtn"
                                        value="<?=trans('contact.write')?>"
                                        id="contact-button"
                                        style="display: none"
                                >
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map_bl">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="map_outer">
                            <i class="micon micon-location"></i>
                            <p class="adres">Museo imaginación, Calle Martínez Campos 13, Málaga, España</p>
                            <div class="googlemap_outer">
                                <div id="map"></div>
                                <script>
                                    function initMap() {
                                        var map = new google.maps.Map(document.getElementById('map'), {
                                            center: {lat: 36.715344, lng: -4.423574},
                                            zoom: 17,
                                            mapTypeControl: false,
                                            fullscreenControl: false,
                                            streetViewControl: false,
                                            styles: [
                                                {elementType: 'geometry', stylers: [{"saturation": -100}]},
                                                {elementType: 'labels', stylers: [{"saturation": -100}]},
                                                {elementType: 'labels.text.fill', stylers: [{"saturation": -100}]},

                                            ],
                                        });
                                        var image = 'http://base.vitazyma.com/museoilu/images/gglpic.png';
                                        var beachMarker = new google.maps.Marker({
                                            position: {lat: 36.715344, lng: -4.423574},
                                            map: map,
                                            icon: image,
                                            title: 'Museo imaginaciin',
                                        });
                                        /*
                                        var marker = new google.maps.Marker({
                                            position: {lat: 54.678419, lng: 25.285112},
                                            map: map,
                                            title: 'Vilnil. Museum of illusions',
                                        });
                                        */

                                    }
                                </script>
                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDH22Rll-58PDF9KQDChws06OwJ-pHMi6o&callback=initMap" async defer></script>
                            </div>
                            <a class="maplink" href="https://goo.gl/maps/ito2HjAsQjR2" target="_blank"><?=trans('contact.open_cart')?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection