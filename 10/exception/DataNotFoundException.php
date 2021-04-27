<?php
namespace exception;

class DataNotFoundException extends \Exception
{
    public function __construct($message = "")
    {
        parent::__construct($message . " not found");
    }

}