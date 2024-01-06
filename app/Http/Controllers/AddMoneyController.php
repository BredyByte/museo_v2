<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper4
 * Date: 7/10/2018
 * Time: 4:25 PM
 */

namespace App\Http\Controllers;
use App\Exceptions\ValidateException;
use App\Http\Requests;
use App\Payments;
use App\Services\BasketService;
use App\UserProducts;
use App\Validation\OrderValidation;
use Illuminate\Http\Request;
use Mail;
use Validator;
use URL;
use Session;
use Redirect;
use Illuminate\Support\Facades\Input;

/** All Paypal Details class **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;


class AddMoneyController extends Controller
{
    private $_api_context;
    private $validation;

    public function __construct(OrderValidation $validation)
    {
        $this->validation = $validation;

        /** setup PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential('Abeh1xqZG8ZrRNG4RcbaFdVxJGZwviWD-jL412LuqzpI4gJOlLbytmiy6tzPAl9ilTXov2_UEinobnOY', 'EEctPNgE8VQh12yP8AhngMK6vO66ovuvCW_OQ50anKZQNur4TqcDvWqfJIKdXATmG-LiqUbeurQzCAgA'));
        $this->_api_context->setConfig( array(
            /**
             * Available option 'sandbox' or 'live'
             */
            'mode' => 'live',
            /**
             * Specify the max request time in seconds
             */
            'http.ConnectionTimeOut' => 1000,
            /**
             * Whether want to log to a file
             */
            'log.LogEnabled' => true,
            /**
             * Specify the file that want to write on
             */
            'log.FileName' => storage_path() . '/logs/paypal.log',
            /**
             * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
             *
             * Logging is most verbose in the 'FINE' level and decreases as you
             * proceed towards ERROR
             */
            'log.LogLevel' => 'FINE'
        ));
    }

    /**
     * Show the application paywith paypalpage.
     *
     * @return \Illuminate\Http\Response
     */
    public function payWithPaypal()
    {
        return view('paywithpaypal');
    }

    /**
     * Store a details of payment with paypal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postPaymentWithpaypal(Request $request)
    {
       /* try {
            $this->validation->validate($request->except("_token"));
        }catch (ValidateException $errors){
            return redirect('order')
                ->withErrors($errors->get(), 'errors');
        }*/

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();
        $user_tem_id = $request->session()->get('user-temp-id');
        $total_money = BasketService::countBasket($user_tem_id);

        if($request->input('delivery') == 2){
            $total_money += 10;
        }

        $req = $request->all();
        $data = new Payments();
        $data->lastname = $req['lastname'];
        $data->name = $req['name'];
        $data->email = $req['email'];
        $data->phone = $req['phone'];
        $data->delivery = $req['delivery'];
        $data->sity = $req['sity']??0;
        $data->street = $req['street']??0;
        $data->house = $req['house']??0;
        $data->entrance = $req['entrance']??0;
        $data->floor = $req['floor']??0;
        $data->door = $req['door']??0;
        $data->zipcode = $req['zipcode']??0;
        $data->message = $req['message']??' ';
        /*$data->timestamps = false;*/
        $data->temp_id = $user_tem_id[0];
        $data->save();
        $item_1->setName('Item 1') /** item name **/
        ->setCurrency('EUR')
            ->setQuantity(1)
            ->setPrice($total_money); /** unit price **//*цена*/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('EUR')
            ->setTotal($total_money);/*общая стоимость*/

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('New order form site museoimaginacion.com');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('status')) /** Specify return URL **/
        ->setCancelUrl(URL::route('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {
            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error','Connection timeout');
                return Redirect::route('shop');
                /** echo "Exception: " . $ex->getMessage() . PHP_EOL; **/
                /** $err_data = json_decode($ex->getData(), true); **/
                /** exit; **/
            } else {
                \Session::put('error','Some error occur, sorry for inconvenient');
                return Redirect::route('shop');
                /** die('Some error occur, sorry for inconvenient'); **/
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();

                break;
            }
        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {
            /** redirect to paypal **/
            return Redirect::away($redirect_url);
        }

        \Session::put('error','Unknown error occurred');
        return Redirect::route('shop');
    }

    public function getPaymentStatus(Request $request)
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            \Session::put('error','Payment failed');
            return Redirect::route('shop');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        /** PaymentExecution object includes information necessary **/
        /** to execute a PayPal account payment. **/
        /** The payer_id is added to the request query parameters **/
        /** when the user is redirected from paypal back to your site **/
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);
        /** dd($result);exit; /** DEBUG RESULT, remove it later **/
        if ($result->getState() == 'approved') {
            $user_tem_id = $request->session()->get('user-temp-id');
            $data = Payments::where(['temp_id'=>$user_tem_id])->get();
            $data_qty = count($data);
            $data_order = \DB::table('products AS p')->join('user_products', 'p.id', '=', 'user_products.product_id')->where(['user_id'=>$user_tem_id])->get();
            $total = BasketService::countBasket($user_tem_id);

            $senders = ['info@museoimaginacion.com',$data[$data_qty - 1 ]->email];

            file_put_contents(storage_path() . '/payments/payments-'.$data[$data_qty - 1 ]->email.'.txt',serialize($data[$data_qty - 1 ]));
            foreach ($senders as $sender){

                Mail::send('email.order', [
                    'data'=>$data[$data_qty - 1 ],'total'=>$total,'data_order'=>$data_order
                ],
                    function ($message) use ($sender)
                    {
                        $message->subject('Pedido');
                        $message->from('info@museoimaginacion.com', 'info@museoimaginacion.com');
                        $message->to($sender);
                    });
            }

            $request->session()->forget('user-temp-id');

            /** it's all right **/
            /** Here Write your database logic like that insert record or value in database if you want **/

            \Session::put('success','Payment success');
            return view('shop.success')->with(['title'=>'ORDER']);
        }
        \Session::put('error','Payment failed');

        return Redirect::route('shop');
    }
}