<?php
$id = 1;
$name = "demo";
$phoneno = "123";
$city = "vadodara"; 
  function change() {
    global $id, $name, $phoneno, $city;
    $id = 2;
    $name = "demo2";
    $phoneno = "456";
    $city = "surat"; 
  }
  function change1() {
    global $id, $name, $phoneno, $city;
    $id = 3;
    $name = "demo3";
    $phoneno = "789";
    $city = "rajkot";
  }
  
?>

<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>phoneno</th>
        <th>city</th>
    </tr>
    <tr>
        <td><?php echo $id;?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $phoneno;?></td>
        <td><?php echo $city;?></td>
    </tr>
    <?php change(); ?>
    <tr>
        <td><?php echo $id;?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $phoneno;?></td>
        <td><?php echo $city;?></td>
    </tr>
    <?php change1(); ?>
    <tr>
        <td><?php echo $id;?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $phoneno;?></td>
        <td><?php echo $city;?></td>
    </tr>
    
</table>