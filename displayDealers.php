<?php include("components/connect.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="./js/displayDealers.js"></script>
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/displayDealers.css">
</head>
<body>
  <?php include("components/header.php"); ?>
  <div class="cntr">
    <div class="pgTtl">
      <h2>KYS - List of Dealers</h2>
      <button type="submit" class="btn btn-prm" onClick="goEntryPage()">Add New Dealer</button>
    </div>
    <div class="clb"></div>
    <?php
       $sql = "SELECT ID, Name, CompanyName,Description,Address,Contact,Product FROM Contact"; 
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {	
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
		
           echo "<td>".$row["ID"]."</td>
		<td>".$row["Name"]."</td>
		<td>".$row["CompanyName"]. "</td>
		<td>".$row["Description"]. "</td>
		<td>".$row["Address"]. "</td>
		<td>".$row["Contact"]. "</td>
		<td>".$row["Product"]. "</td>";
	   echo "</tr>";
       }
       echo "</table>";
       } else {
           echo "No dealers are available in the system";
       }
       $conn->close();
    ?>  
  </div>
  <?php include("components/footer.php"); ?>
</body>
</html>
