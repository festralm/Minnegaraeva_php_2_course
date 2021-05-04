<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Календарь с перебором</title>
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
    function ($class_name) {
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


function print_exception($exception)
{
    preg_match("/\\\\([A-Za-z]+)$/", get_class($exception), $array);
    echo "Возникла ошибка <span class='exception'>$array[1]</span> (";
    echo $exception->getMessage().")<br>";
}?>
</body>
</html>
