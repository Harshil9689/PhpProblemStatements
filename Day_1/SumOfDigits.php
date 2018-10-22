<?php
class SumOfDigits
{
    function getSumOfDigits($n) {
        if ($n<0){
            return -1;
        }else if ($n>99) {
            return -2;
        }else if($n<10 && $n>=0){
            return -3;
        }else {
            return floor($n/10) + $n%10;
        }
        
    }   
}
$test = new SumOfDigits();
echo $test->getSumOfDigits(182);
?>
