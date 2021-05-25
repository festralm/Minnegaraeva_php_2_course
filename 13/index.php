<?php

require_once __DIR__ . '/classes/ComplexNumber.php';

use \classes\ComplexNumber;

$y = new ComplexNumber(3, 5);
$x = new ComplexNumber(0, 0);
$y = new ComplexNumber(sqrt(3.0), 5.0);
$res = new ComplexNumber(- 2.0 - sqrt(3.0), - 4.0);
echo ComplexNumber::add(null, null);