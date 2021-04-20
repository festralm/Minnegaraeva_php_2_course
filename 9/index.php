<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Календарь с перебором</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="/9/script.js"></script>
    <style>
        .browser_logger, .file_logger {
            margin-left: 20px;
        }
    </style>
</head>
<body>
<?php if (isset($_REQUEST["button"])):
    include 'Logger.php';
    include 'BrowserLogger.php';
    include 'FileLogger.php';

    $text = explode("\n", $_REQUEST["strings"]);
    $logger_type = $_REQUEST["logger"];
    $l = new BrowserLogger("date_time");

    if ($logger_type == "browser_logger") {
        $logger = new BrowserLogger($_REQUEST['mode']);
    } else {
        $logger = new FileLogger($_REQUEST['file_name']);
    }

    function my_log(array $strings, Logger $logger) {
        for ($i = 0; $i < sizeof($strings); $i++) {
            $res = "Строка ".($i + 1)." ";
            if (!preg_match('/[A-Z]/', $strings[$i])) {
                $res .= "не ";
            }
            $res .= "содержит заглавные буквы";
            $logger->write($res);
        }
    }
    my_log($text, $logger);

    ?>
<?php else:?>
    <form action="<?php __FILE__ ?>">
        <textarea name="strings" placeholder="Введите строки"></textarea><br>
        <div>
            <label><input type="radio" name="logger" value="file_logger" id="file_logger">File Logger</label><br>
            <div class="file_logger" hidden>
                <input placeholder="Введите имя файла" name="file_name">
            </div>

            <label><input type="radio" name="logger" value="browser_logger" id="browser_logger">Browser Logger</label><br>
            <div class="browser_logger" hidden>
                <label><input type="radio" name="mode" value="nothing" id="nothing">Ничего</label><br>
                <label><input type="radio" name="mode" value="time" id="time">Только время</label><br>
                <label><input type="radio" name="mode" value="date_time" id="date_time">Время и дата</label><br>
            </div>
        </div>
        <input type="submit" value="Выполнить" name="button">
    </form>
<?php endif;?>
</body>
</html>
