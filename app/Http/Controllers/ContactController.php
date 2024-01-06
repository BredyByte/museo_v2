<?php

namespace App\Http\Controllers;
use App\Exceptions\ValidateException;
use App\Services\BasketService;
use App\Validation\EmailValidation;
use Illuminate\Http\Request;
use Mail;


class ContactController extends Controller
{
    private $validation;

    public function __construct(EmailValidation $validation)
    {
    $this->validation = $validation;
    }

    public function index(Request $request)
    {   $user_key = str_random(20);
        $user_current_key = $request->session()->has('user-temp-id');
        $user_current_key ?: $request->session()->push('user-temp-id',$user_key);
        $title = 'Contacts';
        $user_tem_id = $request->session()->get('user-temp-id');
        $prod = \DB::table('user_products')->where(['user_id'=>$user_tem_id])->count();
        $request->session()->push('qty',$prod);
        $products_at_the_basket = \DB::table('products AS p')->join('user_products', 'p.id', '=', 'user_products.product_id')->where(['user_id'=>$user_tem_id])->get();
        $count_basket = BasketService::countBasket($user_tem_id);
        $request->session()->push('count_basket',$count_basket);
        $request->session()->push('products',$products_at_the_basket);
        return view('contact.index')->with(compact('title'));
    }
    public function sendEmail(Request $request)
    {

        if ($request->method('post')){
            try{
                $this->validation->validate($request->all());
            Mail::send('email.send', [
                    'from' => $request->input('name'),
                    'phone'=>$request->input('phone'),
                    'email'=>$request->input('email'),
                    'messages'=>$request->input('message'),
                    ],
                    function ($message)
                {
                    $message->subject('Message from contact page');
                    $message->from('info@museoimaginacion.com', 'info@museoimaginacion.com');
                    $message->to('info@museoimaginacion.com');
                });

                return redirect('contacts');

            }catch (ValidateException $errors){
                return redirect('contacts')
                    ->withErrors($errors->get(), 'errors');
            }

        }

    }
}