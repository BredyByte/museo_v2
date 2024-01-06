@extends('layouts.app')
@section('title',$title)
@section('body_class','shoppage orderpage')
@section('_header')
    @include('layouts._header2')
@endsection
@section('content')
    <section id="cont">
        <div class="order_bl">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="order_outer">
                            @foreach ($products_at_the_basket as $products)
                                <div class="order_line">
                                    <div class="good_img">
                                        <img src="{{asset("images/$products->img")}}">
                                    </div>
                                    <div class="good_info">
                                        <p class="good_name">{{$products->product}}</p>
                                        <p class="good_pres"><?= trans('shop.ticket_has');?></p>
                                        <p class="good_price">{{$products->price}}<span>€</span></p>
                                        <p class="gprice_info">*<?= trans('shop.nds');?></p>
                                        <div class="good_count">
                                            <div id="{{$products->id}}" class="plusbtn countbtn" style="z-index:20">+</div>
                                            <div id= 'counts-{{$products->id}}' class="count">{{$products->qty}}</div>
                                            <div id="{{$products->id}}" class="minusbtn countbtn" style="z-index:20">-</div>
                                        </div>
                                    </div>
                                    <a href="{{route('delete',['id'=>$products->id])}}" class="order_delete"><span>+</span></a>
                                </div>
                            @endforeach
                        </div>
                        <div class="summ_bl">
                            <p class="summ_txt"><?= trans('shop.total');?>: <span class="summ_price" id="count-sum-id">{{$count_basket}}</span><span class="summ_curr">€</span></p>
                            <p class="summ_info">*<?= trans('shop.nds');?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ordf_outer">
                            <h1><?= trans('shop.contacts');?></h1>
                            <div class="form_outer">
                                <form class="forma" action="{{route('addmoney.paypal')}}" accept-charset="utf-8" method="post">
                                    {{ csrf_field() }}
                                    <div class="row1">
                                        <input class="lead_name my_input" name="name" type="text" required="" placeholder="<?= trans('shop.name');?>">
                                        <input class="lead_lastname my_input" name="lastname" type="text" required="" placeholder="<?= trans('shop.lastname');?>">
                                    </div>
                                    <div class="row1 row2">
                                        <input class="lead_email my_input" name="phone" type="text" required="" placeholder="<?= trans('shop.phone');?>">
                                        <input class="lead_phone my_input" name="email" type="email" required="" placeholder="<?= trans('shop.email');?>">
                                    </div>
                                    <div class="deliverycase">
                                        <div class="chbox_outer chbox_delivery">
                                            <label class="selfdelivery"><input type="radio" id="freeDeliver1" name="delivery" checked value="1"><span class="bg"></span><?= trans('shop.take_mus')?></label>
                                            <label class="deliveryc">
                                                <input type="radio" name="delivery" id="costDeliver1" value="2"><span class="bg"></span><?= trans('shop.delir');?>
                                                <span class="delivery_cost">*<?= trans('shop.delir_cost');?> 10€</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="delivery_input">
                                        <div class="row1">
                                            <input class="my_input" name="sity" type="text" placeholder="<?= trans('shop.sity');?>">

                                            <input class="my_input" name="street" type="text" placeholder="<?= trans('shop.street');?>">
                                        </div>
                                        <div class="row1">
                                            <input class="my_input" name="house" type="text" placeholder="<?= trans('shop.house');?>">
                                            <input class="my_input" name="entrance" type="text" placeholder="<?= trans('shop.entrance');?>">
                                        </div>
                                        <div class="row1">
                                            <input class="my_input" name="floor" type="text" placeholder="<?= trans('shop.floor');?>">

                                            <input class="my_input" name="door" type="text" placeholder="<?= trans('shop.door');?>">

                                        </div>
                                        <div class="row1 row3">
                                            <input class="my_input" name="zipcode" type="text" placeholder="<?= trans('shop.zip');?>">

                                        </div>
                                    </div>
                                    <textarea class="my_tarea" name="message" type="text" placeholder="<?= trans('shop.comment');?>"></textarea>

                                    <div class="deliverycase">
                                        <h2><?= trans('shop.order');?></h2>
                                        <div class="chbox_outer chbox_pay">
                                            <label><input type="radio" name="pay" checked value="PayPal"><span class="bg"></span>PayPal</label>
                                            {{--<label><input type="radio" name="pay"   value="Карта Visa, MasterCard"><span class="bg"></span>Карта Visa, MasterCard</label>--}}
                                        </div>
                                    </div>
                                    <input type="submit" class="form-bttn bttn transbtn" value="<?= trans('shop.order');?>">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="margin: auto;padding-top: 40px;text-align: justify"><p>*<?= trans('shop.about_del');?></p></div>
        </div>
    </section>
@endsection