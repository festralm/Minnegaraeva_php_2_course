<?php


class BrowserLogger extends Logger
{
    private string $date_time;

    /**
     * BrowserLogger constructor.
     * @param $date_time
     */
    public function __construct($date_time)
    {
        $this->date_time = $date_time;
    }

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