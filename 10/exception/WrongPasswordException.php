<?php
namespace exception;

/**
 * Class WrongPasswordException
 *
 * Exception is thrown in case if given password is wrong in database
 *
 * @author Minnegaraeva Alia <alia01minn@gmail.com>
 * @copyright Copyright (c) 2021, Minnegaraeva Alia
 * @package exception
 * @version 1.0
 */
class WrongPasswordException extends \Exception
{
    /**
     * WrongPasswordException constructor.
     * @author Minnegaraeva Alia <alia01minn@gmail.com>
     * @copyright Copyright (c) 2021, Minnegaraeva Alia
     * @version 1.0
     */
    public function __construct()
    {
        parent::__construct("Your password is wrong");
    }

}