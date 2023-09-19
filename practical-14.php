<?php

function Number($num) {
    if ($num > 0) {
        echo "positive.";
    } elseif ($num < 0) {
        echo "negative.";
    } else {
        echo "zero.";
    }
}

$Check = 0; 
number($Check);

?>
