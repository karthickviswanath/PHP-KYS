google.maps.event.addDomListener(window, 'load', function () {
  var places = new google.maps.places.Autocomplete(document.getElementById('txtPlaces'));
  google.maps.event.addListener(places, 'place_changed', function () {
    var place = places.getPlace();
    var address = place.formatted_address;
    var latitude = place.geometry.location.lat();
    var longitude = place.geometry.location.lng();
    var mesg = "Address: " + address;
    mesg += "\nLatitude: " + latitude;
    mesg += "\nLongitude: " + longitude;
  });
});

$.get("https://ipinfo.io", function (response) {
  $('#txtPlaces').val(response.city);
}, "jsonp");


function showResult(e) {
  var qrystring = $("#search").val();
  var location = $("#txtPlaces").val();
  var code = e.keyCode || e.which;
  if(e.type == "click" || (code == 13 || code== 32)) { 
    $.get( "Result.php?search="+qrystring+"&location="+location, function(data) {
      $('.ajxResp').html(data);
    })
    .fail(function() {
      $('.ajxResp').html("Error!!!");
    });
  }
}

/*function formSubmit(e){
  var code = e.keyCode || e.which;
  if(e.type == "click" || (code == 13 || code== 32)) { 
    document.getElementById("srchFrm").submit();
  }
}*/