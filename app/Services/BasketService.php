<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper4
 * Date: 7/4/2018
 * Time: 1:01 PM
 */

namespace App\Services;


use App\UserProducts;

class BasketService
{
    const ticket1 = 10;
    const ticket2  = 20;
    public static function countBasket($user_id){

       $all_products =  UserProducts::where(['user_id'=>$user_id])->get();
       $sum = 0;
       foreach ($all_products as $product){
           $sum += $product->qty * $product->price;
       }
       return $sum;
    }
}