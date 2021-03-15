<?php
function get_string_with_probability($string_prob) {
    ksort($string_prob);
    $probability = mt_rand(1, 100) / 100;
    $prev_prob = 0;
    for (reset($string_prob); ($string = key($string_prob));
    next($string_prob)) {
        $curr_prob = $prev_prob + $string_prob[$string];
        if ($prev_prob < $probability && $probability <= $curr_prob
            || $prev_prob == 0 && $probability == 0) {
            yield $string;
            return;
        }
        $prev_prob = $curr_prob;
    }
}

function check_generator($string_prob) {
    $string_count = [];
    $n = 10000;
    foreach ($string_prob as $string => $prob) {
        $string_count[$string] = 0;
    }
    for ($i = 0; $i < $n; $i++) {
        $generator = get_string_with_probability($string_prob);
        foreach ($generator as $string) {
            $string_count[$string]++;
        }
    }

    $result = [];
    $i = 0;
    foreach ($string_count as $string => $count) {
        $result[$i]["text"] = $string;
        $result[$i]["count"] = $count;
        $result[$i]["calculated_probability"] = round($count / $n, 2);

        $i++;
    }

    print_r(json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}
