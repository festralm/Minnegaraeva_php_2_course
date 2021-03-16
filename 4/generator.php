<?php
function get_string_with_probability($string_probability, $count) {
    ksort($string_probability);
    for ($i = 0; $i < $count; $i++) {
        $probability = mt_rand() / mt_getrandmax();
        $prev_prob = 0;
        for (reset($string_probability); ($string = key($string_probability));
             next($string_probability)) {
            $curr_prob = $prev_prob + $string_probability[$string];
            if ($prev_prob < $probability && $probability <= $curr_prob
                || $prev_prob == 0 && $probability == 0) {
                yield $string;
                break;
            }
            $prev_prob = $curr_prob;
        }
    }
}

function check_generator($string_probability) {
    $string_count = [];
    $n = 10000;
    foreach ($string_probability as $string => $prob) {
        $string_count[$string] = 0;
    }

    $generator = get_string_with_probability($string_probability, $n);
    foreach ($generator as $string) {
        $string_count[$string]++;
    }

    $result = [];
    $i = 0;
    foreach ($string_count as $string => $count) {
        $result[$i]["text"] = $string;
        $result[$i]["count"] = $count;
        $result[$i]["calculated_probability"] = $count / $n;

        $i++;
    }

    print_r(json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}
