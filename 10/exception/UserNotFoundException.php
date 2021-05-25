<?php
namespace exception;

/**
 * Class UserNotFoundException
 *
 * Exception is thrown in case if username is not found in database
 *
 * @author Minnegaraeva Alia <alia01minn@gmail.com>
 * @copyright Copyright (c) 2021, Minnegaraeva Alia
 * @package exception
 * @version 1.0
 */
class UserNotFoundException extends DataNotFoundException
{
    /**
     * UserNotFoundException constructor.
     * @author Minnegaraeva Alia <alia01minn@gmail.com>
     * @copyright Copyright (c) 2021, Minnegaraeva Alia
     * @version 1.0
     * @param string $username username
     */
    public function __construct($username = "")
    {
        parent::__construct("User " . $username . " not found");
    }


}