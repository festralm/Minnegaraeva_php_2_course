<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brainfuck</title>
</head>
<body>
<?php if (isset($_REQUEST['do'])):?>
<?php
$memory = array_fill(0, 30000, 0);
$memory_i = 0;

$code = $_REQUEST['code'];
$params = $_REQUEST['params'];
$code_length = strlen($code);
$params_i = 0;

$res = "";

for ($i = 0; $i < $code_length; $i++) {
    $memory_el =& $memory[$memory_i];
    switch ($code[$i]) {
        case ">":
            $memory_i++;
            break;
        case "<":
            $memory_i--;
            break;
        case "+":
            $memory_el = ($memory_el == 255) ? 0 : ++$memory_el;
            break;
        case "-":
            $memory_el = ($memory_el == 0) ? 255 : --$memory_el;
            break;
        case ".":
            $res .= chr($memory_el);
            break;
        case ",":
            $memory_el = ord($params[$params_i++]);
            break;
        case "[":
            if ($memory_el == 0) {
                $count = 0;
                for ($j = $i; $j < $code_length; $j++) {
                    if ($code[$j] == "[") {
                        $count++;
                    } elseif ($code[$j] == "]") {
                        if ($count != 1) {
                            $count--;
                        } else {
                            $i = $j;
                        }
                    }
                }
            }
            break;
        case "]":
            if ($memory_el != 0) {
                $count = 0;
                for ($j = $i; $j > -1; $j--) {
                    if ($code[$j] == "]") {
                        $count++;
                    } elseif ($code[$j] == "[") {
                        if ($count != 1) {
                            $count--;
                        } else {
                            $i = $j - 1;
                        }
                    }
                }
            }
            break;

    }
}
echo $res."<br>";
?>
<?php else:?>
<form action="1/index.php">
    <textarea name="code" placeholder="Введите код"></textarea>
    <br>
    <input type="text" name="params" placeholder="Введите входные параметры"/>
    <br>
    <input type="submit" name="do" value="Выполнить">
</form>
<?php endif;?>
</body>
</html>
