<?php
if(isset($_POST["upload"])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    
    if($check === false || !in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
        echo "Invalid image format.";
    } elseif(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error uploading image.";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>
    <h2>Upload an Image</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <button type="submit" name="upload">Upload</button>
    </form>
</body>
</html>
