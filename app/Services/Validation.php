<?php


namespace App\Services;


use Validator, App\Exceptions\ValidateException;


abstract class Validation
{
    protected $validator;
    private $input;

    public $rules = array();
    public $messages = array();




    public function validate($inputs):bool
    {
        $this->input = $inputs;

        $this->validator = Validator::make($this->input, $this->rules, $this->messages);

        if ($this->validator->invalid()) {

            throw new ValidateException($this->validator);
        }
        return true;
    }


}