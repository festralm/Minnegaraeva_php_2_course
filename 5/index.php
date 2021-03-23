<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Нестандартная сортировка</title>
</head>
<body>
<?php if (isset($_REQUEST["button"])):
    $password = $_REQUEST["password"];
    echo "<b>Пароль: $password</b><br/>";

    $regular_length = "/.{10,}/";
    $regular_once = "/([A-Z])|([a-z])|(\d)|([%$#_*])/";
    $regular_lower = "/[A-Z]{4,}/";
    $regular_upper = "/[a-z]{4,}/";
    $regular_digit = "/\d{4,}/";
    $regular_symbol = "/[%$#_*]{4,}/";
    $preg_match_array = [$regular_lower, $regular_upper, $regular_digit, $regular_symbol];

    $is_proper = True;

    if (!preg_match($regular_length, $password)) {
        echo "Длина пароля менее 10 символов<br/>";
        $is_proper = False;
    }
    preg_match_all($regular_once, $password, $matches);
    for ($i = 1; $i < 5; $i++) {
        if (count(array_filter($matches[$i])) < 2) {
            if ($i == 1) {
                echo "В пароле содержится менее 2 прописных букв<br/>";
            } else if ($i == 2) {
                echo "В пароле содержится менее 2 строчных букв<br/>";
            } else if ($i == 3) {
                echo "В пароле содержится менее 2 цифр<br/>";
            } else if ($i == 4) {
                echo "В пароле содержится менее 2 специальных символов<br/>";
            }
            $is_proper = False;
        }
    }
    for ($i = 0; $i < 4; $i++) {
        if (preg_match($preg_match_array[$i], $password)) {
            if ($i == 0) {
                echo "В пароле содержится более 3 прописных букв подряд<br/>";
            } else if ($i == 1) {
                echo "В пароле содержится более 3 строчных букв подряд<br/>";
            } else if ($i == 2) {
                echo "В пароле содержится более 3 цифр подряд<br/>";
            } else if ($i == 3) {
                echo "В пароле содержится более 3 специальных символов подряд<br/>";
            }
            $is_proper = False;
        }
    }
    if ($is_proper) {
        echo "Пароль подходит";
    }
    ?>
<?php else:?>
    <form action="<?php __FILE__ ?>">
        <input name="password" type="password" placeholder="Введите пароль">
        <br/><br/><input value="Выполнить" type="submit" name="button">
    </form>
<?php endif;?>
</body>
</html>
