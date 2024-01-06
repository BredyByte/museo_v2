<?php
namespace App\Validation;

use App\Services\Validation;


class EmailValidation extends Validation
{
    public $rules = array(
        'name'    => array('required','string'),
        'phone'    => array('required'),
        'email'    => array('required','email'),
        'message'=>['required','string']
    );
}