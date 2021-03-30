<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Перекодировка файла</title>
</head>
<body>
<?php
$rules = parse_ini_file("index.ini", true);
$strings = file($rules["main"]["filename"], FILE_IGNORE_NEW_LINES);

$first_symbol =  $rules["first_rule"]["symbol"];
$upper = $rules["first_rule"]["upper"];
$to_upper = 0;
$first_is_correct = true;
if ($upper === "true") {
    $to_upper = true;
} elseif ($upper === "false")  {
    $to_upper = false;
} else {
    $first_is_correct = false;
}

$second_symbol = $rules["second_rule"]["symbol"];
$direction = $rules["second_rule"]["direction"];
$one = 0;
$second_is_correct = true;
if ($direction === "+") {
    $one = 1;
} elseif ($direction === "-") {
    $one = -1;
} else {
    $second_is_correct = false;
}

$third_symbol =  $rules["third_rule"]["symbol"];
$delete = $rules["third_rule"]["delete"];
$third_is_correct = true;
if (strlen($delete) != 1) {
    $third_is_correct = false;
}

for ($i = 0; $i < sizeof($strings); $i++) {
    $string =& $strings[$i];
    if ($first_is_correct && starts_with($string, $first_symbol) === true) {
        first_transform($string, $to_upper);
    }
    if ($third_is_correct && starts_with($string, $third_symbol) === true) {
        //third_transform
        $string = str_replace($delete, "", $string);
    }
    if ($second_is_correct && starts_with($string, $second_symbol) === true) {
        second_transform($string, $one);
    }
    unset($string);
}
foreach ($strings as $string) {
    echo $string."<br/>";
}
echo "<br/>";
if (!$first_is_correct) {
    echo "Ошибка в первом правиле<br/>";
}
if (!$second_is_correct) {
    echo "Ошибка во втором правиле<br/>";
}
if (!$third_is_correct) {
    echo "Ошибка в третьем правиле<br/>";
}

function starts_with($string, $begin): bool
{
    $len = strlen($begin);
    return substr($string, 0, $len) === $begin;
}

function first_transform(&$string, $to_upper) {
    if ($to_upper) {
        $string = strtoupper($string);
    } else {
        $string = strtolower($string);
    }
}
function second_transform(&$string, $one) {
    $str_array = str_split($string);
    for ($j = 0; $j < sizeof($str_array); $j++) {
        $char =& $str_array[$j];
        if (is_numeric($char)) {
            if ($char == 9 && $one === 1) {
                $char = 0;
            } elseif ($char == 0 && $one === -1) {
                $char = 9;
            } else {
                $char = intval($char) + $one;
            }
        }
    }
    $string = join("", $str_array);
}
?>
</body>
</html>
