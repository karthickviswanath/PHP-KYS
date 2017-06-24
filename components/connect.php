
<?php
$servername = "localhost";
$username = "mysqladminavk";
$password = "Karthick@123";
$dbname = "DealersMart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 } 

?>
