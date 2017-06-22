<?php


$servername = "localhost";
$username = "mysqladminavk";
$password = "Karthick@123";
$dbname = "DealersMart";


/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Dealers";
*/


$name = $_POST['Name'];
$CompanyName = $_POST['CompanyName'];
$Description = $_POST['Description'];
$Address = $_POST['Address'];
$Contact = $_POST['Contact'];
$Product = $_POST['Product'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 } 

$sql = "INSERT INTO Contact (Name,CompanyName,Description, Address,Contact,Product) VALUES ('".$name."', '".$CompanyName."','".$Description."','".$Address."','".$Contact."','".$Product."')"; 

$result = $conn->query($sql);

header('Location: '."http://leisurehomes.co/test/");

?>