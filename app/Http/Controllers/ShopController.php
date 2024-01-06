<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper4
 * Date: 7/4/2018
 * Time: 11:25 AM
 */

namespace App\Http\Controllers;
use App\Product;
use App\Services\BasketService;
use App\UserProducts;
use Cookie;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use View;

class ShopController extends Controller
{
    public function index(Request $request)
    {

        $title = 'Shop';
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
        return view('shop.index')->with(compact('title','products'));
    }

    public function gifts(Request $request)
    {

        $title = 'Shop-Gifts';
        $get_gifts_product = Product::where(['type'=>'gift'])->get();
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

        return view('shop.index-second')->with(compact('title','products','get_gifts_product'));
    }

    public function order(Request $request)
    {
        $title = 'Order';
        $user_tem_id = $request->session()->get('user-temp-id');
        $prod = \DB::table('user_products')->where(['user_id'=>$user_tem_id])->count();
        $request->session()->push('qty',$prod);
        $products_at_the_basket = \DB::table('products AS p')->join('user_products', 'p.id', '=', 'user_products.product_id')->where(['user_id'=>$user_tem_id])->get();
        $count_basket = BasketService::countBasket($user_tem_id);
        $request->session()->push('count_basket',$count_basket);
        $request->session()->push('products',$products_at_the_basket);
        return view('shop.order')->with(compact('title','order','products_at_the_basket','count_basket'));
    }
    public function buy(Request $request,$id)
    {

        $product = Product::findOrFail($id);
        $user_tem_id = $request->session()->get('user-temp-id');
        if (isset($user_tem_id)){
            $current_order =  \DB::table('user_products')->where(['product_id'=>$id])->where(['user_id'=>$user_tem_id])->count();
            if ($current_order === 0){
                $user_products = new UserProducts();
                $user_products->user_id = $user_tem_id[0];
                $user_products->product_id = $product->id;
                $user_products->qty = 1;
                $user_products->price = $product->price;
                $user_products->timestamps = false;
                $user_products->save();
            }
            $prod = \DB::table('user_products')->where(['user_id'=>$user_tem_id])->count();


            $request->session()->push('qty',$prod);
            $products_at_the_basket = \DB::table('products AS p')->join('user_products', 'p.id', '=', 'user_products.product_id')->where(['user_id'=>$user_tem_id])->get();
            $count_basket = BasketService::countBasket($user_tem_id);
            $request->session()->push('count_basket',$count_basket);
            $request->session()->push('products',$products_at_the_basket);

        }

        return redirect()->back();
    }
    public function currentQtyAndSum(Request $request){

    }
    public function actionAddQty(Request $request)
    {
        $user_tem_id = $request->session()->get('user-temp-id');
        $id = $request->id;
        if (isset($user_tem_id)){
            $current_order =  UserProducts::where(['id'=>$id])->where(['user_id'=>$user_tem_id])->orderBy('id','desc')->first();
            $current_order->qty +=  1;
            $current_order->timestamps = false;
            $current_order->save();
            $count_basket = BasketService::countBasket($user_tem_id);
            return [$current_order->qty,$count_basket];
        }
    }
    public function actionRemoveQty(Request $request){

        $user_tem_id = $request->session()->get('user-temp-id');
        $id = $request->id;
        if (isset($user_tem_id)){
            $current_order =  UserProducts::where(['id'=>$id])->where(['user_id'=>$user_tem_id])->orderBy('id','desc')->first();
            if($current_order->qty > 0){
                $current_order->qty -=  1;
            }
            $current_order->timestamps = false;
            $current_order->save();
            $count_basket = BasketService::countBasket($user_tem_id);
            return [$current_order->qty,$count_basket];
        }
    }
    public function orderDelete(Request $request,$id)
    {
        $user_tem_id = $request->session()->get('user-temp-id');
        if (isset($user_tem_id)) {
            $order = DB::table('user_products')->where(['id' => $id])->where(['user_id' => $user_tem_id]);
            $current_order = $order->count();
            if ($current_order !== 0) {
                $order->delete();
            }
        }
        $prod = \DB::table('user_products')->where(['user_id'=>$user_tem_id])->count();


        $request->session()->push('qty',$prod);
        $products_at_the_basket = \DB::table('products AS p')->join('user_products', 'p.id', '=', 'user_products.product_id')->where(['user_id'=>$user_tem_id])->get();
        $count_basket = BasketService::countBasket($user_tem_id);
        $request->session()->push('count_basket',$count_basket);
        $request->session()->push('products',$products_at_the_basket);
        return redirect()->back();
    }

}