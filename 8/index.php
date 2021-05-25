<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 8</title>
    <style>
        .column {
            float: left;
            width: 50px;
            text-align: center;
            height: 50px;
        }
        .calendar {
            font-size: 20px;
            width: 350px;
        }
        .row {
            height: 50px;
        }

        .first {
            float: right;
        }
    </style>
</head>
<body>
<?php if (isset($_REQUEST["button"])):
    date_default_timezone_set("Europe/Moscow");
    $month = $_REQUEST["month"];
    $now = new DateTime();
    $date = new DateTime($month);
    $step = new DateInterval('P1D');
    $end = cal_days_in_month(CAL_GREGORIAN, $date->format("m"), $date->format("Y")) - 1;
    $period = new DatePeriod($date, $step, $end);

    $calendar = [];
    $today = 0;
    if ($date->format("Y-m") == $now->format("Y-m")) {
        $today = $now->format("d");
    }
    echo $today;

    $i = 0;
    foreach ($period as $day) {
        $day_num = (int) $day->format("d");
        if (sizeof($calendar) == 0) {
            $weekday = $day->format("w");
            for ($j = 0; $j < $weekday - 1; $j++) {
                $calendar[$i][] = 0;
            }
        }
        $calendar[$i][] = $day_num;
        if (sizeof($calendar[$i]) == 7) {
            $i++;
        }
    }

    $time = time();
    echo "<div classes='calendar'>";
    echo "<h3>".strftime("%B %Y", $date->getTimestamp())."</h3>";
    echo '<div classes="row">';

    for ($i = 0; $i < 7; $i++) {
        if ($i > 4) {
            echo '<span style="color: red; ">';
        }
        echo '<div classes="column">' . strftime("%a", $time). '</div>';
        if ($i > 4) {
            echo '</span>';
        }
        $time += 24 * 60 * 60;
    }
    echo '</div>';

    for ($j = 0; $j < sizeof($calendar); $j++) {
        $week = $calendar[$j];
        if ($j == 0) {
            echo "<div classes='row first'>";

        } else {
            echo "<div classes='row'>";
        }
        for ($i = 0; $i < sizeof($week); $i++) {
            echo "<div classes='column'>";
            $day = $week[$i];
            if ($day != 0) {
                if ($i > 4) {
                    echo '<span style="color: red; ">';
                }
                if ($today != 0 && $day == $today) {
                    echo "<b>";
                }
                echo "$day";
                if ($today != 0 && $day == $today) {
                    echo "</b>";
                }
                if ($i > 4) {
                    echo '</span>';
                }
            }
            echo "</div>";
        }
        echo "</div>";
    }
    echo "</div>";

    ?>
<?php else:?>
    <form action="<?php __FILE__ ?>">
        <input name="month" type="month" value="<?php echo date("Y-m") ?>">
        <br/><br/><input value="Отправить" type="submit" name="button">
    </form>
<?php endif;?>
</body>
</html>
