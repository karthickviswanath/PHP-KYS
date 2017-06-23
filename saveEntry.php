<?php


include("components/connect.php"); 


$name = $_POST['Name'];
$CompanyName = $_POST['CompanyName'];
$Description = $_POST['Description'];
$Address = $_POST['Address'];
$Contact = $_POST['Contact'];
$Product = $_POST['Product'];



$sql = "INSERT INTO Contact (Name,CompanyName,Description, Address,Contact,Product,profileimageid) VALUES ('".$name."', '".$CompanyName."','".$Description."','".$Address."','".$Contact."','".$Product."',1)"; 

//$result = $conn->query($sql);


if (!mysqli_query($conn,$sql))
  {
  echo("Error description: " . mysqli_error($conn));
  }

//echo @sql;

header('Location: '."index.php");

?>