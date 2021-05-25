<?php

/**
 * Class Logger
 *
 * @abstract
 * @author <alia01minn@gmail.com>
 */
abstract class Logger
{
    /**
     * @access <public>
     * @param $str
     * @return mixed
     */
    abstract public function write($str);
}
