<?php
namespace dto;
spl_autoload_register(function ($class_name) {
    $file = "\\..\\" . $class_name . '.php';
    include $file;
}, false);

use exception\UsernameAlreadyExistsException;
use exception\DataAlreadyExistsException;
use exception\UserNotFoundException;
use exception\WrongPasswordException;
use exception\DataNotFoundException;

class User
{
    function sign_up($username, $password, $email) {
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

    function sign_in($username, $password) {
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

    function get_birthdate($username) {
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

    function change_username($username, $new_username) {
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
