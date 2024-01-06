<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function() {
    Route::get('/cookie',function () {
        return view('cookie');
    })->name('cookie');
    Route::get('/privacy',function () {
        return view('privacy');
    })->name('privacy');
    Route::get('/legal',function () {
        return view('legal');
    })->name('legal');

    Route::get('/','HomeController@index')->name('home');
    Route::get('/partnership', static function() {
        return view('partnership');
    })->name('partnership');
    Route::get('/gallery','GalleryController@index')->name('gallery');
    Route::get('/contacts', 'ContactController@index')->name('contact');
    Route::get('/shop', 'ShopController@index')->name('shop');
    Route::get('/shop/terms', 'ShopController@gifts')->name('gifts');
    Route::get('/buy/{id}', 'ShopController@buy')->name('buy');
    Route::get('/shop/buy','ShopController@basket')->name('basket');
    Route::get('/shop/order','ShopController@order')->name('order');
    Route::get('/shop/delete/{id}','ShopController@orderDelete')->name('delete');
    Route::get('/shop/add','ShopController@actionAddQty')->name('actionAddQty');
    Route::get('/shop/remove','ShopController@actionRemoveQty')->name('actionRemoveQty');
   /* Route::get('/paywithpaypal', array('as' => 'paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));*/
// route for post request
    Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
// route for check status responce
    Route::get('paypal', array('as' => 'status','uses' => 'AddMoneyController@getPaymentStatus',));
});
Route::post('/send', 'ContactController@sendEmail')->name('send');
Route::get('setlocale/{lang}', function ($lang) {

    $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
    $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

    //разбиваем на массив по разделителю
    $segments = explode('/', $parse_url);

    //Если URL (где нажали на переключение языка) содержал корректную метку языка
    if (in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages)) {

        unset($segments[1]); //удаляем метку
    }

    //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
    if ($lang != App\Http\Middleware\LocaleMiddleware::$mainLanguage){
        array_splice($segments, 1, 0, $lang);
    }

    //формируем полный URL
    $url = Request::root().implode("/", $segments);

    //если были еще GET-параметры - добавляем их
    if(parse_url($referer, PHP_URL_QUERY)){
        $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url); //Перенаправляем назад на ту же страницу

})->name('setlocale');