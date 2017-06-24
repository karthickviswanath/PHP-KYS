<?php include("components/connect.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/addEntry.css">
</head>
<body>
  <?php include("components/header.php"); ?>
  <div class="cntr">
  	<h2>KYS - List of Dealers</h2>
	<form action="saveEntry.php" method="post" enctype="multipart/form-data">
		<div>
			<label for="Name">Name:</label>
			<input type="text" class="sml" id="Name" placeholder="Enter Name" name="Name" required="true">
		</div>
		
		<div>
			<label for="email">CompanyName:</label>
			<input type="text" id="CompanyName" placeholder="Enter CompanyName" name="CompanyName" required="true">
		</div>
		
		<div>
			<label for="Description">Description:</label>      
			<textarea rows="5" id="Description"  name="Description" placeholder="Enter Description" required="true"></textarea>
		</div>
		
		<div>
			<label for="Address">Address:</label>
			<input type="text" id="Address" placeholder="Enter Address" name="Address" required="true">
		</div>
		
		<div>
			<label for="Contact">Contact:</label>
			<input type="text" class="sml" id="Contact" placeholder="Enter Contact" name="Contact" required="true">
		</div>
		
		<div>
			<label for="Product">Product:</label>
			<input type="text" id="Product" placeholder="Enter Product" name="Product" required="true">
		</div>  
		
		<div>
			<label for="fileToUpload">Product Image:</label>
			<input type="file" class="sml" name="fileToUpload" id="fileToUpload" required="true">
		</div>
		
		<div class="actBtn">
			<button type="submit" class="btn btn-prm">Submit</button>
			<a href="index.php" class="btn btn-scnd">Cancel</a>
		</div>
	</form>
  </div>
  <?php include("components/footer.php"); ?>
</body>
</html>
  