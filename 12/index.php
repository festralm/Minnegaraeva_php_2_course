<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 12</title>
</head>
<body>
<?php
if (!isset($_REQUEST["button"])):?>
<form action="<?php __FILE__ ?>">
    <?php if (isset($_COOKIE['PHPSESSID']) && isset($_COOKIE['old_value'])):?>
    <h4>Введите значение, которые вы вводили в прошлый раз</h4>
    <?php endif; ?>
    <input name="string" placeholder="Введите строку">
    <input name="button" type="submit" value="Выполнить">
</form>
<?php else:
    if (isset($_COOKIE['PHPSESSID']) && isset($_COOKIE['old_value'])) {
        if ($_COOKIE['old_value'] === $_REQUEST['string']) {
            header("Location: http://localhost/2?button=" . $_REQUEST['button'] . "&string=" . $_REQUEST['string']);
        } else {
            unset($_REQUEST["button"]);
            unset($_REQUEST["string"]);
            header("Location: http://localhost/12");
        }
    } else {
        session_start();
        setcookie("old_value", $_REQUEST['string']);
        header("Location: http://localhost/2?button=" . $_REQUEST['button'] . "&string=" . $_REQUEST['string']);
    }
    ?>
<?php endif;?>
</body>
</html>

