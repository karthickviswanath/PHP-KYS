<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./js/displayDealers.js"></script>
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div class="cntr">

<?php

include("components/connect.php"); 
include("components/header.php"); 

$sql = "SELECT ID, Name, CompanyName,Description,Address,Contact,Product FROM Contact"; 
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	echo "<br><br><B>List of Dealers</B><br><br>";
	echo "<table border=1 class='table'>";
	echo "<tr><th>ID</th>
		<th>Name</th>
		<th>Company Name</th>
		<th>Description</th>
		<th>Address</th>
		<th>Contact</th>
		<th>Product</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		//echo "<tr>";		
		
        echo 	"<td>".$row["ID"]."</td>
				<td>".$row["Name"]."</td>
				<td>".$row["CompanyName"]. "</td>
				<td>".$row["Description"]. "</td>
				<td>".$row["Address"]. "</td>
				<td>".$row["Contact"]. "</td>
				<td>".$row["Product"]. "</td>";
		echo "</tr>";
		
		
			/*
			echo 	//"<td>".
					$row["CompanyName"]."<br>".
					$row["Address"]."<br>".
					$row["Contact"]."<br>".					
					$row["Product"]."<br>"; 	

			echo "---------------------<br>";
			*/
					//"</td>";	
		   			   
		//echo "</tr>";

    }
	echo "</table>";
} else {
    echo "No dealers are available in the system";
}
 $conn->close();
?> 

  <button type="submit" class="btn btn-success" onClick="goEntryPage()">Add New Dealer</button>
  <button type="button" class="btn btn-danger" onClick="goHome()">Go back to Home</button>
  </div>
  <?php include("components/footer.php"); ?>
</body>
</html>
