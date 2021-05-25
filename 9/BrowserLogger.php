<?php

/**
 * Class BrowserLogger
 *
 * @author <alia01minn@gmail.com>
 */
class BrowserLogger extends Logger
{
    /**
     * @access <private>
     * @var string
     */
    private string $date_time;

    /**
     * BrowserLogger constructor.
     * @access <public>
     * @param $date_time
     */
    public function __construct($date_time)
    {
        $this->date_time = $date_time;
    }

    /**
     * @access <public>
     * @param $str
     * @return mixed|void
     */
    public function write($str)
    {
        if ($this->date_time != "nothing") {
            if ($this->date_time == "date_time") {
                echo strftime("%d.%m.%Y %H:%M:%S: ");
            } else {
                echo strftime("%H:%M:%S: ");
            }
        }

        echo $str."<br>";
    }
}