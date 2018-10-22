<?php

class NextMultiple100 {
    
    function getNextMultipleOf100( $num ) {
        $n = 0;
        if($num < 0 ) {
            return -1;
        } else{
            
            $n = (ceil(($num + 99) / 100) -1) * 100;
            return $n;
            
        }
    }
}

$ob = new NextMultiple100();
echo $ob->getNextMultipleOf100(21);
?>
