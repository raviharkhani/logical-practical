<?php

for ($num = 2; $num <= 100; $num++) {
    $primenumber = 1;
    for ($r = 2; $r * $r <= $num; $r++) {
        if ($num % $r === 0) {
            $primenumber = 0;
            break;
        }
    }
    
    if ($primenumber) {
        echo $num . " ";
    }
}
?>





