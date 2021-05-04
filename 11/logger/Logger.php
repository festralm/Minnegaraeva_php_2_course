<?php

namespace logger;

require '../vendor/autoload.php';

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class Logger implements LoggerInterface
{

    private string $_fileName = 'log.txt';

    /**
     * Logger constructor.
     */
    public function __construct()
    {
        $file = fopen($this->_fileName, 'a');
        fwrite($file, "[\n]");
        fclose($file);
    }


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
        $last  = (count($lines) - 1);
        unset($lines[$last]);

        if (count($lines) > 1) {
            $lastLine           = $lines[($last - 1)];
            $lines[($last - 1)] = substr(
                $lastLine,
                0,
                (strlen($lastLine) - 1)
            ).",\n";
        }

        $fp = fopen($this->_fileName, 'w');
        fwrite($fp, implode('', $lines));
        fclose($fp);

        $file = fopen($this->_fileName, 'a');
        fwrite($file, json_encode($res, JSON_PRETTY_PRINT)."\n");
        fwrite($file, ']');
        fclose($file);

    }


}
