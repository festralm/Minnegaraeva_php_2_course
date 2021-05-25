<?php
namespace exception;

/**
 * Class UsernameAlreadyExistsException
 *
 * Exception is thrown in case if username is already exists in database
 *
 * @author Minnegaraeva Alia <alia01minn@gmail.com>
 * @copyright Copyright (c) 2021, Minnegaraeva Alia
 * @package exception
 * @version 1.0
 */
class UsernameAlreadyExistsException extends DataAlreadyExistsException
{
    /**
     * UsernameAlreadyExistsException constructor.
     * @author Minnegaraeva Alia <alia01minn@gmail.com>
     * @copyright Copyright (c) 2021, Minnegaraeva Alia
     * @version 1.0
     * @param string $username username
     */
    public function __construct($username = "")
    {
        parent::__construct("Username " . $username . " already exists");
    }

}