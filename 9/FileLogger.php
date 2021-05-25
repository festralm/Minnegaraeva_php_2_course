<?php

/**
 * Class FileLogger
 * @author <alia01minn@gmail.com>
 */
class FileLogger extends Logger
{

    /**
     * @access <private>
     * @var string
     */
    private string $file_name;
    /**
     * @access <private>
     * @var
     */
    private $file;

    /**
     * FileLogger constructor.
     * @access <public>
     * @param $file_name
     */
    public function __construct($file_name)
    {
        $this->file_name = $file_name;
    }

    /**
     * @param $str
     * @access <public>
     * @return mixed|void
     */
    public function write($str)
    {
        $file = fopen($this->file_name, 'a');
        $this->file = $file;
        fwrite($file, $str."\n");

    }

    /**
     * @access <public>
     *
     */
    public function __destruct()
    {
        fclose($this->file);
    }


}