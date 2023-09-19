<?php
  $id = 123;
  $name = "weltec";
  $city = "vadodara";
  function change() {
    global $id, $name, $city;
    $id = 456;
    $name = "weltec2";
    $city = "surat"; 
  }

?>
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>city</th>
    </tr>
    <tr>
        <td><?php echo $id;?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $city;?></td>
    </tr>
    <?php change();?>
    <tr>
        <td><?php echo $id;?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $city;?></td>
    </tr>
</table>
