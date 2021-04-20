<?php


class FileLogger extends Logger
{

    private string $file_name;
    private $file;

    /**
     * FileLogger constructor.
     * @param $file_name
     */
    public function __construct($file_name)
    {
        $this->file_name = $file_name;
    }

    public function write($str)
    {
        $file = fopen($this->file_name, 'a');
        $this->file = $file;
        fwrite($file, $str."\n");

    }

    public function __destruct()
    {
        fclose($this->file);
    }


}