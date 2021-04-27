<?php
namespace exception;

class UserNotFoundException extends DataNotFoundException
{
    public function __construct($message = "")
    {
        parent::__construct("User " . $message . " not found");
    }


}