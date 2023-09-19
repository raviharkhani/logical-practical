<?php
$menu1 = "menu1";
$submenu1 = "submenu1";
$submenu2 = "submenu2";
$submenu3 = "submenu3";
$submenu4 = "submenu4";
$child1 = "child1";
$child2 = "child2";
$child3 = "child3";
$child4 = "child4";
$child5 = "child5";
$child6 = "child6";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <ul>
    <li><?php echo $menu1;?></li>
    <li>
        <ul>
            <li><?php echo $submenu1?></li>
            <li><?php echo $submenu2?></li>
            <li><?php echo $submenu3?>
              <ul>
                <li><?php echo $child1;?></li>
                <li><?php echo $child2;?></li>
                <li><?php echo $child3;?></li>
              </ul>
        </li>
        <li><?php echo $submenu4?>
        <ul>
                <li><?php echo $child4;?></li>
                <li><?php echo $child5;?></li>
                <li><?php echo $child6;?></li>
              </ul>
    </li>
        </ul>
    </li>
   </ul>
</body>
</html>