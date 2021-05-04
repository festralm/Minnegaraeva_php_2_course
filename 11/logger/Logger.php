<?php

namespace logger;

require '../vendor/autoload.php';

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class Logger implements LoggerInterface
{

    private string $_fileName = 'log.txt';


    public function emergency($message, array $context=[])
    {
        $this->log(LogLevel::EMERGENCY, $message, $context);
    }

    public function alert($message, array $context=[])
    {
        $this->log(LogLevel::ALERT, $message, $context);
    }

    public function critical($message, array $context=[])
    {
        $this->log(LogLevel::CRITICAL, $message, $context);
    }

    public function error($message, array $context=[])
    {
        $this->log(LogLevel::ERROR, $message, $context);
    }

    public function warning($message, array $context=[])
    {
        $this->log(LogLevel::WARNING, $message, $context);
    }

    public function notice($message, array $context=[])
    {
        $this->log(LogLevel::NOTICE, $message, $context);
    }

    public function info($message, array $context=[])
    {
        $this->log(LogLevel::INFO, $message, $context);
    }

    public function debug($message, array $context=[])
    {
        $this->log(LogLevel::DEBUG, $message, $context);
    }

    public function log($level, $message, array $context=[])
    {
        $replace = [];
        foreach ($context as $key => $val) {
            if (is_array($val) === false
                && (is_object($val) === false
                || method_exists($val, '__toString') === true)
            ) {
                $replace['{'.$key.'}'] = $val;
            }
        }

        $str = strtr($message, $replace);

        $res
            = [
            'type'     => $level,
            'datetime' => strftime('%d.%m.%Y %H:%M:%S'),
            'contents' => $str,
        ];

        $lines = file($this->_fileName);
        $json = join($array=$lines);

        $log_objects = json_decode($json);
        $log_objects[] = $res;
        $fp = fopen($this->_fileName, 'w');
        fwrite($fp, json_encode($log_objects, JSON_PRETTY_PRINT));
        fclose($fp);

    }


}
