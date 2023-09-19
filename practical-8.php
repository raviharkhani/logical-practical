<?php

$name = array (
     array(11,"weltec1","vadodara"),
     array(12,"weltec2","surat"),
     array(13,"weltec3","rajkot")
);

?>

<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>city</th>
    </tr>
   
    <?php
    for ($a = 0; $a < count($name); $a++) {
        echo "<tr>";
        for ($b = 0; $b < count($name[$a]); $b++) {
            echo "<td>" . $name[$a] [$b] . "</td>";
        }
        echo "</td>"; 
  }
 ?>
</table>
