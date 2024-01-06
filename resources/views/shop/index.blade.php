@extends('layouts.app')
@section('title',$title)
@section('body_class','shoppage gallery')
@section('_header')
    @include('layouts._header2')
@endsection
@section('content')


    @if ($message = Session::get('error'))
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            {!! $message !!}
        </div>
        <?php Session::forget('error');?>
    @endif
    <div class="open-backdrop"></div>
    <section id="cont">
        <div class="top_bl">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="shop_btns">
                            <a href="" class="shopbtn1 bttn transbtn active"><?= trans('shop.buy_tickets');?></a>
                           <a href="{{route('gifts')}}" class="shopbtn2 bttn transbtn"><?= trans('shop.buy_gifts');?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shopticket_bl">

            <div class="container">
                <div class="col-md-12" style="margin-bottom: 20px;line-height: 1.5;">
                    <div class="ticket_viz">
                        <?= trans('shop.buy_new');?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ticket_elem_outer">
                            <div class="ticket_viz">
                                <div class="t_prisebl">
                                    <div class="inn">
                                        <p class="price">10 <span>€</span></p>
                                    </div>
                                </div>
                                <p class="info"><?= trans('shop.info');?></p>
                            </div>
                            <a href="{{route('buy',['id'=>1])}}" class="buybtn bttn transbtn"><?= trans('shop.buy');?></a>
                        </div>
                        <div class="ticket_elem_outer color2">
                            <div class="ticket_viz">
                                <div class="t_prisebl">
                                    <div class="inn">
                                        <p class="price">5 <span>€</span></p>
                                    </div>
                                </div>
                                <p class="info"><?= trans('shop.info2');?></p>
                            </div>
                            <a href="{{route('buy',['id'=>2])}}" class="buybtn bttn transbtn"><?= trans('shop.buy');?></a>
                        </div>
                                        <p class="price"><b><?= trans('shop.free');?></b></p>
                                        <p class="info"><?= trans('shop.info3');?></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection