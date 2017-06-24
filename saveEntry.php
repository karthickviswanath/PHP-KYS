<?php

include("components/connect.php"); 

$sql="SELECT 1 from Contact";
if($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set  
  $rowcount=mysqli_num_rows($result);   
  }

echo  $rowcount;
//Code for uploading the image
//$target_dir = "images/";
$target_dir = "images/";
$imageID = $rowcount + 1;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//echo $imageFileType;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

/*
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
 */


 // Check file size - 1 MB
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $target_file = $target_dir.$imageID.".".$imageFileType;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

//Code for saving the product information
$name = $_POST['Name'];
$CompanyName = $_POST['CompanyName'];
$Description = $_POST['Description'];
$Address = $_POST['Address'];
$Contact = $_POST['Contact'];
$Product = $_POST['Product'];

$sql = "INSERT INTO Contact (Name,CompanyName,Description, Address,Contact,Product,profileimageid) VALUES ('".$name."', '".$CompanyName."','".$Description."','".$Address."','".$Contact."','".$Product."',".$imageID.")"; 

if (!mysqli_query($conn,$sql))
  {
  echo("Error description: " . mysqli_error($conn));
  }
  
 else {
      
header('Location: '."index.php");
     
 }
//echo @sql;



?>