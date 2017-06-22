<?php

$qry = $_GET['search']; 
$location = "";
include("components/connect.php"); 
 
if($location=="")
	$sql = "SELECT ID, Name, CompanyName,Description,Address,Contact,Product,profileimageid FROM Contact where Product like '%".$qry."%'"; 
else
	$sql = "SELECT ID, Name, CompanyName,Description,Address,Contact,Product,profileimageid  FROM Contact where Product like '%".$qry."%' and Address like '%".$location."%'";

//echo $sql;

$result = $conn->query($sql);

$res = "";


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$imgID = $row["profileimageid"];
	$res = $res."<div class='rstBx'><div class='pic'><img src='http://leisurehomes.co/KYS/images/".$imgID.".jpg' alt='Maruti Showroom'/></div><div class='dtm'><a href='index.php'>"
               .$row["CompanyName"]."</a><div class='dtls'>"
               .$row["Description"]."</div><div><i class='fa fa-address-card'></i>" 
	       .$row["Address"]."</div><div><i class='fa fa-phone'></i>"
               .$row["Contact"]."</div><button type='button'>Rate this</button><button type='button'>eMail</button></div><div class='dtm'>Map is here!! </div><div style='clear:both'></div></div>";
    }
    echo $res;
} else {
    echo "No results :(";
}
$conn->close();
?>
