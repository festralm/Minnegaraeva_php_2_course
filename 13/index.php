<?php

require_once __DIR__ . '/classes/ComplexNumber.php';

use \classes\ComplexNumber;

$y = new ComplexNumber(3, 5);
$x = new ComplexNumber(0, 0);
var_dump($x);
echo "<br>";
$y = new ComplexNumber(sqrt(3.0), 5.0);
echo sqrt(3.0);
echo "<br>";
var_dump($y);
echo "<br>";
$res = new ComplexNumber(- 2.0 - sqrt(3.0), - 4.0);
var_dump($res);
echo "<br>";
