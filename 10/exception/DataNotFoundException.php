<?php
namespace exception;

/**
 * Class DataNotFoundException
 *
 * Exception is thrown in case if data is not found in database
 *
 * @author Minnegaraeva Alia <alia01minn@gmail.com>
 * @copyright Copyright (c) 2021, Minnegaraeva Alia
 * @package exception
 * @version 1.0
 */
class DataNotFoundException extends \Exception
{
    /**
     * DataNotFoundException constructor.
     * @author Minnegaraeva Alia <alia01minn@gmail.com>
     * @copyright Copyright (c) 2021, Minnegaraeva Alia
     * @version 1.0
     * @param string $message some data
     */
    public function __construct($message = "")
    {
        parent::__construct($message . " not found");
    }

}