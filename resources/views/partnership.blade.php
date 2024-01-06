@extends('layouts.app')
@section('title','Partners')
@section('body_class','shoppage gallery')
@section('_header')
    @include('layouts._header2')
@endsection
@section('content')
    <style>
        @media (max-width: 1200px) {
            .partners-container {
              flex-direction: column;
            }
        }
    </style>
<div class="main-partners" style="display: flex;
    justify-content: center;
    flex-direction: column;
    text-align: center;
">
    <h2 style="color: white"><?= trans('home.partners') ?></h2>
    <div class="partners-container" style="display: flex;justify-content: space-around;">
    <div class="figure1" style="margin-left: 10px;margin-top: 5%">
        <a href="https://www.felicesvacaciones.es/blog/vacaciones-en-la-costa-de-sol">
            <img src="{{asset('images/partnership/1.jpg')}}" style="width: 300px;height: 100px">
        </a>
    </div>

    <div class="figure1" style="margin-left: 10px;margin-top: 5%" >
        <a href="http://malagaenelcorazon.com/">
            <img src="{{asset('images/partnership/2.png')}}" style="width: 300px;height: 100px">
        </a>
    </div>

    <div class="figure1" style="margin-left: 10px;margin-top: 5%">
        <a href="https://www.diariosur.es/">
            <img src="{{asset('images/partnership/3.png')}}" style="width: 300px;height: 100px">
        </a>
    </div>
    <div class="figure1" style="margin-left: 10px;margin-top: 5%">
        <a href="https://www.canalsur.es/portada-2808.html">
            <img src="{{asset('images/partnership/4.png')}}" style="width: 300px;height: 100px">
        </a>
    </div>
    </div>
    <div class="figure1" style="margin-left: 10px;margin-top: 5%">
        <a href="https://agendaculturalmalaga.com/recomendamos">
            <img src="{{asset('images/partnership_5.jpg')}}" style="width: 300;height: 200px">
        </a>
    </div>
    <h1 style="color: white;margin-top: 50px;margin-bottom: 20px;"><?= trans('home.partners2') ?></h1>
</div>
@endsection