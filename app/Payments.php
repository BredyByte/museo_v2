<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    public static function createNewOrder($request,$user_temp_id){
        $data = new Payments();
        $data->lastname = $request['lastname'];
        $data->phone = $request['phone'];
        $data->delivery = $request['delivery'];
        $data->sity = $request['sity'];
        $data->street = $request['street'];
        $data->house = $request['house'];
        $data->entrance = $request['entrance'];
        $data->floor = $request['floor'];
        $data->door = $request['door'];
        $data->zipcode = $request['zipcode'];
        $data->message = $request['message'];
        $data->timestamps = false;
        $data->temp_id = $user_temp_id;
        $data->save();

    }
}
