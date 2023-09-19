<?php
  function show($src) {
    return "<img src='img/".$src."' class='img-resp'/>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div.img img{
        width:20%;
        float: left;
        border:1px solid #ccc;
        padding:10px;
        margin:5px;
    }
</style>
<body>
    <div class="grid">
        <div class="img"> <?php echo show ('putin.jpg'); ?></div>
        <div class="img"> <?php echo show ('ranaveer.jpg'); ?></div>
        <div class="img"> <?php echo show ('rock.jpg'); ?></div>
        <div class="img"> <?php echo show ('ronaldo.jpg'); ?></div>
    </div>
    <div class="grid">
        <div class="img"> <?php echo show ('tata.jpg'); ?></div>
        <div class="img"> <?php echo show ('virat.jpg'); ?></div>
        <div class="img"> <?php echo show ('test-2-img.jpg'); ?></div>
        <div class="img"> <?php echo show ('test-3-img.jpg'); ?> </div>
    </div>
    <div class="grid">
        <div class="img"> <?php echo show ('test-4-img.jpg'); ?></div>
        <div class="img"> <?php echo show ('test-5-img.jpg'); ?></div>
        <div class="img"> <?php echo show ('test-6-img.jpg'); ?></div>
        <div class="img"> <?php echo show ('test-7-img.jpg'); ?></div>
    </div>
</body>
</html>