<?php
namespace dto;
spl_autoload_register(
/**
 * Autoloader
 *
 * Autoloads classes
 *
 * @author Minnegaraeva Alia <alia01minn@gmail.com>
 * @copyright Copyright (c) 2021, Minnegaraeva Alia
 * @version 1.0
 * @param string $class_name name of class to autoload
 * @return void
 */
    function ($class_name) {
        $file = "\\..\\" . $class_name . '.php';
        include $file;
    }, false);

use exception\UsernameAlreadyExistsException;
use exception\DataAlreadyExistsException;
use exception\UserNotFoundException;
use exception\WrongPasswordException;
use exception\DataNotFoundException;

/**
 * Class User
 *
 * Class for user in database
 *
 * @author Minnegaraeva Alia <alia01minn@gmail.com>
 * @copyright Copyright (c) 2021, Minnegaraeva Alia
 * @package dto
 * @version 1.0
 */
class User
{
    /**
     * Method sign_up
     *
     * Enroll user
     *
     * @author Minnegaraeva Alia <alia01minn@gmail.com>
     * @copyright Copyright (c) 2021, Minnegaraeva Alia
     * @version 1.0
     * @param string $username username
     * @param string $password hash password
     * @param string $email email
     * @throws DataAlreadyExistsException
     * @throws UsernameAlreadyExistsException
     * @return void
     */
    public function sign_up(string $username, string $password, string $email):void
    {
        echo "<h3>sign_up()<br></h3>";

        $username_already_exists = rand(1, 2);
        if ($username_already_exists == 1) {
            throw new UsernameAlreadyExistsException($username);
        }


        $data_already_exists = rand(1, 2);
        if ($data_already_exists == 1) {
            throw new DataAlreadyExistsException("Email " . $email);
        }
    }

    /**
     * Method sign_in
     *
     * Authenticates user
     *
     * @author Minnegaraeva Alia <alia01minn@gmail.com>
     * @copyright Copyright (c) 2021, Minnegaraeva Alia
     * @version 1.0
     * @param string $username username
     * @param string $password hash password
     * @throws UserNotFoundException
     * @throws WrongPasswordException
     * @return void
     */
    public function sign_in(string $username, string $password):void
    {
        echo "<h3>sign_in()<br></h3>";

        $user_not_found = rand(1, 2);
        if ($user_not_found == 1) {
            throw new UserNotFoundException($username);
        }

        $wrong_password = rand(1, 2);
        if ($wrong_password == 1) {
            throw new WrongPasswordException();
        }
    }

    /**
     * Method get_birthdate
     *
     * Returns user's birthdate
     *
     * @author Minnegaraeva Alia <alia01minn@gmail.com>
     * @copyright Copyright (c) 2021, Minnegaraeva Alia
     * @version 1.0
     * @param string $username username
     * @throws DataNotFoundException
     * @throws UserNotFoundException
     * @return void
     */
    public function get_birthdate(string $username):void
    {
        echo "<h3>get_birthdate()<br></h3>";

        $data_not_found = rand(1, 2);
        if ($data_not_found == 1) {
            throw new DataNotFoundException("Birthdate");
        }

        $user_not_found = rand(1, 2);
        if ($user_not_found == 1) {
            throw new UserNotFoundException($username);
        }
    }

    /**
     * Method change_name
     *
     * Changes user's name to given
     *
     * @author Minnegaraeva Alia <alia01minn@gmail.com>
     * @copyright Copyright (c) 2021, Minnegaraeva Alia
     * @version 1.0
     * @param string $username username
     * @param string $new_username new username
     * @throws UserNotFoundException
     * @throws UsernameAlreadyExistsException
     * @return void
     */
    public function change_username(string $username, string $new_username):void
    {
        echo "<h3>change_username()<br></h3>";

        $user_not_found = rand(1, 2);
        if ($user_not_found == 1) {
            throw new UserNotFoundException($username);
        }

        $username_already_exists = rand(1, 2);
        if ($username_already_exists == 1) {
            throw new UsernameAlreadyExistsException($username);
        }
    }
}
