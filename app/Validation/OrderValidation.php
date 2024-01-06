<?php
/**
 * Created by PhpStorm.
 * User: dfmdeveloper4
 * Date: 7/17/2018
 * Time: 10:09 AM
 */

namespace App\Validation;


use App\Services\Validation;

class OrderValidation extends Validation
{
    public $rules = array(
        'name'    => array('required','string'),

    );
}