<?php
namespace classes;

use exception\UserNotFoundException;

class ComplexNumber
{

    private float $a;
    private float $b;

    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public static function add(ComplexNumber $x, ComplexNumber $y): ComplexNumber
    {
        return new ComplexNumber(
            $x->getA() + $y->getA(),
            $x->getB() + $y->getB()
        );
    }

    public static function sub(ComplexNumber $x, ComplexNumber $y): ComplexNumber
    {
        return new ComplexNumber(
            $x->getA() - $y->getA(),
            $x->getB() - $y->getB()
        );
    }
    public static function mult(ComplexNumber $x, ComplexNumber $y): ComplexNumber
    {
        return new ComplexNumber(
            $x->getA() * $y->getA() - $x->getB() * $y->getB(),
            $x->getA() * $y->getB() + $x->getB() * $y->getA(),
        );
    }
    public static function div(ComplexNumber $x, ComplexNumber $y): ComplexNumber
    {
        if (self::abs($y) == 0) {
            throw new \DivisionByZeroError();
        }
        $den = $y->getA() * $y->getA() + $y->getB() * $y->getB();
        return new ComplexNumber(
            ($x->getA() * $y->getA() + $x->getB() * $y->getB()) / $den,
            ($x->getB() * $y->getA() - $x->getA() * $y->getB()) / $den
        );
    }
    public static function abs(ComplexNumber $x): float
    {
        return sqrt($x->getA() * $x->getA() + $x->getB() * $x->getB());
    }

    public function __toString() : string
    {
        if ($this->a == 0 && $this->b == 0) {
            return "0";
        } elseif ($this->a == 0) {
            return $this->b."i";
        } elseif ($this->b == 0) {
            return $this->a;
        }
        return $this->a." + ".$this->b."i";
    }

    public function getA(): float
    {
        return $this->a;
    }

    public function getB(): float
    {
        return $this->b;
    }

}