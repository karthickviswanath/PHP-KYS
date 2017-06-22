<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/common.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/result.css">
  <link rel="stylesheet" type="text/css" href="css/font_awesome.css"> 
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC7V4fV2Uj24kugWWAuOoD7-rYjSgGcL3A&sensor=false&libraries=places"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="./js/index.js"></script>
</head>

<body>
    <?php include("components/header.php"); ?>
    <div class="cntr">
      <form id="srchFrm" method="POST" action="Result.php">
        <i id="map" class="fa fa-map-marker" aria-hidden="true"></i>		
        <input type="text" name="loc" id="txtPlaces" placeholder="Place"> 
        <input type="text" id="search" name="search" placeholder="Search.." onKeydown="showResult(event)"> 
        <i id="fltrSbt" class="fa fa-search" onClick="showResult(event)"></i> 
      </form> 
      <div style="clear:both"></div>
      <div class="ajxResp"></div>
    </div>
    <?php include("components/footer.php"); ?>
</body>
</html> 