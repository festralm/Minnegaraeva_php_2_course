<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 10</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="/9/script.js"></script>
    <style>
        .exception {
            color: #e04242;
        }
    </style>
</head>
<body>
<?php
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
    function ($class_name):void {
        $file = $class_name . '.php';
        include $file;
    }, false
);

use dto\User;
use exception\UsernameAlreadyExistsException;
use exception\DataAlreadyExistsException;
use exception\UserNotFoundException;
use exception\WrongPasswordException;
use exception\DataNotFoundException;

/** @var User $user */
$user = new User();

try {
    $user->sign_up("alia", "alia", "alia@alia");
} catch (UsernameAlreadyExistsException $e) {
    print_exception($e);
} catch (DataAlreadyExistsException $e) {
    print_exception($e);
}

try {
    $user->sign_in("alia", "alia");
} catch (UserNotFoundException $e) {
    print_exception($e);
} catch (WrongPasswordException $e) {
    print_exception($e);
}

try {
    $user->get_birthdate("alia");
} catch (UserNotFoundException $e) {
    print_exception($e);
} catch (DataNotFoundException $e) {
    print_exception($e);
}

try {
    $user->change_username("alia", "ilya");
} catch (UsernameAlreadyExistsException $e) {
    print_exception($e);
} catch (UserNotFoundException $e) {
    print_exception($e);
}


/**
 * Method print_exception
 *
 * Prints thrown exception
 *
 * @author Minnegaraeva Alia <alia01minn@gmail.com>
 * @copyright Copyright (c) 2021, Minnegaraeva Alia
 * @version 1.0
 * @param Exception $exception
 * @return void
 */
function print_exception(Exception $exception):void
{
    preg_match("/\\\\([A-Za-z]+)$/", get_class($exception), $array);
    echo "Возникла ошибка <span classes='exception'>$array[1]</span> (";
    echo $exception->getMessage().")<br>";
}?>
</body>
</html>
