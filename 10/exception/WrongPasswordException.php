<?php
namespace exception;

class WrongPasswordException extends \Exception
{
    public function __construct()
    {
        parent::__construct("Your password is wrong");
    }

}