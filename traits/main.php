<?php
trait Sumer{
    public function sum($var1,$var2){
        return $var1+$var2;
    }
}
trait Multiplier {
    public function multiply($var1,$var2){
        return $var1*$var2;
    }
}
class Calculator {
    use Sumer;
    use Multiplier;
    public function compute($var1,$var2){
        echo "Result of sumation: ".$this->sum($var1,$var2) ."\n";
        echo "Result of multiplication: ".$this->multiply($var1,$var2)."\n";
    }
}

$myCalc = new Calculator();
$myCalc->compute(23,67);