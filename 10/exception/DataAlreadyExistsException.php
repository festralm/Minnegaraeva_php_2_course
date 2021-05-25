<?php
namespace exception;

/**
 * Class DataAlreadyExistsException
 *
 * Exception is thrown in case if data is already exists in database
 *
 * @author Minnegaraeva Alia <alia01minn@gmail.com>
 * @copyright Copyright (c) 2021, Minnegaraeva Alia
 * @package exception
 * @version 1.0
 */
class DataAlreadyExistsException extends \Exception
{
    /**
     * DataAlreadyExistsException constructor.
     * @author Minnegaraeva Alia <alia01minn@gmail.com>
     * @copyright Copyright (c) 2021, Minnegaraeva Alia
     * @version 1.0
     * @param string $message some data
     */
    public function __construct($message = "")
    {
        parent::__construct($message . " already exists");
    }

}