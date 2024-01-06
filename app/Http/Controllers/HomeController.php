<?php

namespace App\Http\Controllers;

use App\Services\BasketService;
use App\Services\SessionService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        $title = 'Museum';
        $user_key = str_random(20);
        $user_current_key = $request->session()->has('user-temp-id');
        $user_current_key ?: $request->session()->push('user-temp-id',$user_key);
        $user_tem_id = $request->session()->get('user-temp-id');
        $prod = \DB::table('user_products')->where(['user_id'=>$user_tem_id])->count();
        $request->session()->push('qty',$prod);
        $products_at_the_basket = \DB::table('products AS p')->join('user_products', 'p.id', '=', 'user_products.product_id')->where(['user_id'=>$user_tem_id])->get();
        $count_basket = BasketService::countBasket($user_tem_id);
        $request->session()->push('count_basket',$count_basket);
        $request->session()->push('products',$products_at_the_basket);
        return view('home.home')->with(compact('title'));
    }
}
