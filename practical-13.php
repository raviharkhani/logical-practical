<?php

function Area($length, $width) {
    return $length * $width;
}

$length = 15; 
$width = 10;

$area = Area($length, $width);
echo "length $length width $width is: $area";

?>

