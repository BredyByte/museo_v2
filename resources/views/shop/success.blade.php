@extends('layouts.app')
@section('title',$title)
@section('body_class','shoppage gallery')
@section('_header')
    @include('layouts._header2')
@endsection
@section('content')
@if ($message = Session::get('success'))
    <div class="col-md-6 alert alert-success" style="margin: auto;display:flex;justify-content: center;
    align-items: center;">

        <img  src="{{asset('images/succs.png')}}" style="margin-right:30px " alt="First slide">
         {!! 'Gracias por su pedido' !!}
        <a href="{{route('home')}}"  class="btn btn-success" style="margin-left: 40px">Volver a inicio</a>
    </div>
    <?php Session::forget('success');?>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {!! $message !!}
    </div>
    <?php Session::forget('error');?>
@endif
@endsection