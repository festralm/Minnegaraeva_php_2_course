<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Сетевые утилиты</title>
</head>
<body>
<?php if (isset($_REQUEST["button"])):
    $address = escapeshellcmd($_REQUEST["address"]);
    $ip = gethostbyname($address);
    if (isset($_REQUEST["tracert"])) {
        $tracert = $_REQUEST["tracert"];
    }
    echo "<b>$ip</b><br>";
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        if (isset($_REQUEST["ping"])) {
            exec("ping $ip", $resp, $code);
            preg_match_all("/\d/", sapi_windows_cp_conv(sapi_windows_cp_get('oem'), 65001, $resp[8]), $matches);
            echo ($matches[0][1] / $matches[0][0] * 100) . "%<br>";
        }
        if (isset($_REQUEST["tracert"])) {
            $str = exec("tracert -d $ip", $resp, $code);
            for ($i = 3; $i < count($resp) - 2; $i++) {
                $string = sapi_windows_cp_conv(sapi_windows_cp_get('oem'), 65001, $resp[$i])."<br>";
                preg_match("/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/", $string, $matches);
                if (sizeof($matches) > 0) {
                    echo $matches[0] . " ";
                }
            }
        }
    } else {
        echo "Невереный адрес";
    }
    ?>
<?php else:?>
    <form action="<?php __FILE__ ?>">
        <input name="address" type="text" placeholder="Введите адрес сайта">
        <label>ping<input type="checkbox" name="ping" value="ping"></label>
        <label>tracert<input type="checkbox" name="tracert" value="tracert"></label>
        <br/><br/><input value="Отправить" type="submit" name="button">
    </form>
<?php endif;?>
</body>
</html>
