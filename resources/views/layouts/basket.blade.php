<?php
$products = \Illuminate\Support\Facades\Session::get('products');
$products_qty = count($products);
$product_sum = \Illuminate\Support\Facades\Session::get('count_basket');
$product_sum__qty = count($product_sum);
?>
<div class="basket_outer">
    <a class="basket_btn">
        <?php $qty =  count(session('qty'))?>
        <div class="full">{{session('qty')[$qty - 1]}}</div>
        <i class="micon-basket"></i>
    </a>
    <div class="orderboard animated">
        <?if ($products_qty > 0 && !$products[$products_qty - 1]->isEmpty()):?>
       <?foreach ($products[$products_qty - 1] as $product):?>
        <div class="order_outer">
            <div class="order_line">
                <div class="good_img">
                    <img src="{{asset("images/$product->img")}}">
                </div>
                <div class="good_info">
                    <p class="good_name">{{$product->product}}</p>
                    <div class="good_count">
                        <div id="{{$product->id}}" class="plusbtn countbtn">+</div>
                        <div id= 'count-{{$product->id}}' class="count">{{$product->qty}}</div>
                        <div id="{{$product->id}}" class="minusbtn countbtn">-</div>
                    </div>
                </div>
                <div class="good_price">
                    <p class="price">{{$product->price}}<span>€</span></p>
                </div>
                <a href="{{route('delete',['id'=>$product->id])}}" class="order_delete"><span>+</span></a>
            </div>
        </div>
            <?endforeach?>
        <div class="summ_bl">
            <p class="summ_txt"><?= trans('shop.total');?>: <span class="summ_price">{{$product_sum[$product_sum__qty  - 1] }}</span><span class="summ_curr">€</span></p>
            <p class="summ_info">*<?= trans('shop.nds');?></p>
            <a href="{{route('order')}}" class="buybtn transbtn"><?= trans('shop.buy');?></a>
        </div>
    </div>
    <?endif;?>

</div>