<?php
spl_autoload_register(
    function ($className) {
        $file = $className.'.php';
        include $file;
    },
    false
);
use logger\Logger;


class LoggerExample
{
    public function run() {
        $logger = new Logger();

        $str = 'This is log number {num}, {level}';

        $logger->emergency(
            $str,
            [
                'num'   => '1',
                'level' => 'emergency',
            ]
        );

        $logger->alert(
            $str,
            [
                'num'   => '2',
                'level' => 'alert',
            ]
        );

        $logger->critical(
            $str,
            [
                'num'   => '3',
                'level' => 'critical',
            ]
        );

        $logger->error(
            $str,
            [
                'num'   => '4',
                'level' => 'error',
            ]
        );

        $logger->warning(
            $str,
            [
                'num'   => '5',
                'level' => 'warning',
            ]
        );

        $logger->notice(
            $str,
            [
                'num'   => '6',
                'level' => 'notice',
            ]
        );

        $logger->info(
            $str,
            [
                'num'   => '7',
                'level' => 'info',
            ]
        );

        $logger->debug(
            $str,
            [
                'num'   => '8',
                'level' => 'debug',
            ]
        );

        $level = 'debug';

        $logger->log(
            $level,
            $str,
            [
                'num'   => '9',
                'level' => $level,
            ]
        );

    }
}