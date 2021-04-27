<?php
namespace exception;

class DataAlreadyExistsException extends \Exception
{
    public function __construct($message = "")
    {
        parent::__construct($message . " already exists");
    }

}