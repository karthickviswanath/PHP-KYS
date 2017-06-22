
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC7V4fV2Uj24kugWWAuOoD7-rYjSgGcL3A&sensor=false&libraries=places"></script>
<script>
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('Address'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                var mesg = "Address: " + address;
                mesg += "\nLatitude: " + latitude;
                mesg += "\nLongitude: " + longitude;
				//document.getElementById('Product').value=mesg;
				
            });
        });
		
		function goHome()
		{
			window.location = "index.php";		
		}
		
		</script>
		
</head>
<body>

<div class="container">
  <h2>Add New Dealer</h2>
  <form action="saveEntry.php" method="post">
  
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name" required="true">
    </div>
	
	 <div class="form-group">
      <label for="email">CompanyName:</label>
      <input type="text" class="form-control" id="CompanyName" placeholder="Enter CompanyName" name="CompanyName" required="true">
    </div>
	
	 <div class="form-group">
      <label for="email">Description:</label>      
	  <textarea class="form-control" rows="5" id="Description"  name="Description" placeholder="Enter Description" required="true"></textarea>
    </div>
	
	 <div class="form-group">
      <label for="email">Address:</label>
      <input type="text" class="form-control" id="Address" placeholder="Enter Address" name="Address" required="true">
    </div>
	
	 <div class="form-group">
      <label for="email">Contact:</label>
      <input type="text" class="form-control" id="Contact" placeholder="Enter Contact" name="Contact" required="true">
    </div>
	
	 <div class="form-group">
      <label for="email">Product:</label>
      <input type="text" class="form-control" id="Product" placeholder="Enter Product" name="Product" required="true">
    </div>  
  
	
    <button type="submit" class="btn btn-success">Submit</button>
	<button type="button" class="btn btn-danger" onClick="goHome()">Cancel</button>
  </form>
</div>

</body>
</html>
