<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Нестандартная сортировка</title>
</head>
<body>
<?php if (isset($_REQUEST["button"])):
    $input_strings = $_REQUEST["strings"];

    // Разделить на строки
    $string_arr = explode("\n", $input_strings);

    // Разделить строки на слова
    $word_arr = [];
    $i = 0;
    foreach ($string_arr as $str) {
        $word_arr[$i] = explode(' ', trim($str));
        $word_arr[$i + 1] = $word_arr[$i];
        // Перемешать слова в каждой строке
        shuffle($word_arr[$i + 1]);
        $i += 2;
    }

    // Отсортирровать строки по второму слову
    function cmp($a, $b) {
        if (count($a) < 2 && count($b) < 2) return 0;
        if (count($a) < 2) return -1;
        if (count($b) < 2) return 1;
        return strcmp($a[1], $b[1]);
    }
    usort($word_arr, "cmp");

    // Вывести строки
    foreach ($word_arr as $str) {
        echo implode(' ', $str)."<br/>";
    }
    ?>
<?php else:?>
    <form action="<?php __FILE__ ?>">
        <label>Введите строки: <br/><textarea name="strings"></textarea></label>
        <br/><input value="Отсортировать" type="submit" name="button">
    </form>
<?php endif;?>
</body>
</html>
