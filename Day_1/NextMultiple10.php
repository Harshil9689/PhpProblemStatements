<?php

class NextMultiple10 {
    
    function getNextMultipleOf10( $num ) {
        $n = 0;
        if($num < 0 ) {
            return -1;
        } else{
            
            $n = (ceil(($num + 9) / 10) -1) * 10;
            echo $n;
            
        }
    }
}

$ob = new NextMultiple10();
echo $ob->getNextMultipleOf10(21);
?>
