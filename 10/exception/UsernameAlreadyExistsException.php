<?php
namespace exception;

class UsernameAlreadyExistsException extends DataAlreadyExistsException
{
    public function __construct($message = "")
    {
        parent::__construct("Username " . $message . " already exists");
    }

}