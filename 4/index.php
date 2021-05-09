<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 4</title>
</head>
<body>
<?php if (isset($_REQUEST["button"])):
    $input_strings = $_REQUEST["strings"];

    $string_arr = explode("\n", $input_strings);

    $str_weight = [];
    $weight_sum = 0;

    $data = [];
    $i = 0;
    foreach ($string_arr as $str) {
        $array = explode(" ", $str);

        $weight = end($array);
        $weight_int = intval($weight);
        $weight_sum += $weight_int;

        $text = substr($str, 0, - (strlen($weight) + 1));
        $string_probability[$text] = 0;

        $string_exists = false;
        for ($j = 0; $j < count($data); $j++) {
            if ($data[$j]["text"] == $text) {
                $data[$j]["weight"] +=  $weight_int;
                $i--;
                $string_exists = true;
                break;
            }
        }
        if (!$string_exists) {
            $data[$i]["text"] = $text;

            $data[$i]["weight"] = $weight_int;

            $data[$i]["probability"] = 0;
        }
        $i++;
    }
    for ($i = 0; $i < count($data); $i++) {
        $probability = $data[$i]["weight"] / $weight_sum;
        $data[$i]["probability"] = $probability;
    }
    $result = [
        "sum" => $weight_sum,
        "data" => $data,
    ];

    print_r(json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo "<br/><br/>";

    include 'generator.php';
    $string_probability = [];
    foreach ($data as $data_unit) {
        $string_probability[$data_unit["text"]] = $data_unit["probability"];
    }
    check_generator($string_probability);
    ?>
<?php else:?>
    <form action="<?php __FILE__ ?>">
        <label>Введите строки: <br/><textarea name="strings"></textarea></label>
        <br/><input value="Выполнить" type="submit" name="button">
    </form>
<?php endif;?>
</body>
</html>
