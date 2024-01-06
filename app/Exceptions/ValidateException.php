<?php


namespace App\Exceptions;


use Exception;



class ValidateException extends Exception
{
    private $errors;

    public function __construct($container)
    {
        $this->errors =  $container->errors();

        parent::__construct(null);
    }
    public function get()
    {
        return $this->errors;
    }
}