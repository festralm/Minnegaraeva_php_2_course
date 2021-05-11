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
            <input name="string" placeholder="Введите строку" value="<?php echo $_COOKIE['old_value']?>">
        <?php else: ?>
            <input name="string" placeholder="Введите строку" >
        <?php endif; ?>
        <input name="button" type="submit" value="Выполнить">
    </form>
<?php else:
    session_start();
    setcookie("old_value", $_REQUEST['string']);
    $opts = [
        'http' => [
            'method' => 'GET'
        ]
    ];
    $context = stream_context_create($opts);
    echo file_get_contents('http://localhost:8080/2?string='.$_REQUEST['string'].'&button='.urlencode($_REQUEST['button']),
        true, $context);
    ?>
<?php endif;?>
</body>
</html>

