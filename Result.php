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
	$res = $res."<div class='rstBx'><div class='pic'><img src='http://leisurehomes.co/KYS/images/".$imgID.".jpg' alt='Image'/></div><div class='dtm'><a href='index.php'>"
               .$row["CompanyName"]."</a><div class='dtls'>"
               .$row["Description"]."</div><div><i class='fa fa-address-card'></i>" 
	       .$row["Address"]."</div><div><i class='fa fa-phone'></i>"
               .$row["Contact"]."</div><button type='button'>Rate this</button><button type='button'>eMail</button></div><div class='dtm'>".$row["Address"]                
                ."</div>"
                .'<div><iframe src="https://maps.google.com/maps?hl=en&q='.$row["Address"].'&ie=UTF8&t=m&z=16&iwloc=B&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe></div>'
                ."</div><div style='clear:both'></div>"
                ;
    }
    echo $res;
} else {
    echo "No results for your search query. We will get back to you soon";
}
$conn->close();
?>



