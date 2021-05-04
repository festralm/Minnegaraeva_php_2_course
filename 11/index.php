<?php
spl_autoload_register(
    function ($className) {
        $file = $className.'.php';
        include $file;
    },
    false
);
$logger_example = new LoggerExample();
$logger_example->run();
