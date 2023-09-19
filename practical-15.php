<?php
$filename = "practical-15-file.txt";

if (file_exists($filename)) {
    $lineCount = count(file($filename));
    echo "The number of lines in the file is: $lineCount";
} else {
    echo "The file does not exist.";
}
?>

