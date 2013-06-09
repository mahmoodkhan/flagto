<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Marker Animations</title>
    <link href="map.css" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var stockholm = new google.maps.LatLng(59.32522, 18.07002);
var pos = new google.maps.LatLng(59.327383, 18.06747);
var marker = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: pos
  });
var map;
function initialize() {
  var mapOptions = {
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: stockholm
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);
  marker = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: pos
  });
  latlong();
// Try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);
      marker.setPosition(pos);
      google.maps.event.addListener(marker, 'click', toggleBounce);
      google.maps.event.addListener(marker, 'mouseup', latlong);
      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  map.setCenter(options.position);
}




function latlong() {
	lat = marker.getPosition().lat();
	lng = marker.getPosition().lng();
	document.getElementById('lat').innerHTML = lat;
	document.getElementById('lng').innerHTML = lng;
}

function toggleBounce() {

  if (marker.getAnimation() != null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
    <div>Lat:<div id="lat"></div> Long:<div id="lng"></div> </div>
  </body>
</html>
