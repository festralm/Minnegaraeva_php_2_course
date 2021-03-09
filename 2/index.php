<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brainfuck</title>
</head>
<body>
<?php if (isset($_REQUEST["button"])):
    $input_string = $_REQUEST["string"];

    function process_generator($str)
    {
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            $ch = $str[$i];

            if ($ch == 'h') {
                $ch = '4';
                $count++;
            } elseif ($ch == 'l') {
                $ch = '1';
                $count++;
            } elseif ($ch == 'e') {
                $ch = '3';
                $count++;
            } elseif ($ch == 'o') {
                $ch = '0';
                $count++;
            }

            yield $ch;
        }
        return $count;
    }
    function process($str) {
        $generator = process_generator($str);
        $res = "";
        foreach ($generator as $val) {
            $res .= $val;
        }
        return [$res, $generator->getReturn()];
    }

    echo "$input_string <br>";
    $res = process($input_string);
    echo $res[0]."<br>";
    echo $res[1];
    ?>
<?php else:?>
    <form action="<?php __FILE__ ?>">
        <input name="string" placeholder="Введите строку">
        <input name="button" type="submit" value="Выполнить">
    </form>
<?php endif;?>
</body>
</html>
