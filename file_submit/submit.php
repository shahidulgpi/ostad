<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Thank you for your submission Information</h1>

    
<?php

    if(isset($_POST['save']))
    {
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "<p>Your Name is: $name!</p>";
    echo "<p>Your email address is: $email.</p>";

    $imgFile = $_FILES['file']['name'];
    $tmp_dir = $_FILES['file']['tmp_name'];
    $imgSize = $_FILES['file']['size'];

    if(!empty($imgFile))
    {

    $upload_dir = 'uploads/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

    // rename uploading image
    $coverpic = rand(1000,1000000).".".$imgExt;

    // allow valid image file formats
    if(in_array($imgExt, $valid_extensions))
    {
    // Check file size '5MB'
    if($imgSize < 5000000)
    {
    move_uploaded_file($tmp_dir,$upload_dir.$coverpic);
    echo "You have successfully uploading Image";
    }
    else{
    $errMSG = "Sorry, your file is too large.";
    }
    }
    else{
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }
    }
    }		
?>
</body>
</html>