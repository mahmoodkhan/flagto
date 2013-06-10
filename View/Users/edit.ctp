
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
	document.getElementById('UserLat').value = lat;
	document.getElementById('UserLon').value = lng;

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
<div style = "height: 400px;" id="map-canvas"></div>
<div class="formstyle">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit your profile'); ?></legend>
        <?php 
		echo $this->Form->input('lat', array('type' => 'hidden'));
    	echo $this->Form->input('lon', array('type' => 'hidden'));
    
    	echo $this->Form->input('id', array('type' => 'hidden'));
    	echo $this->Form->input('fullname');
    	echo $this->Form->input('phone');
   		echo $this->Form->input('address');
    	
    	?>
    </fieldset>
	<?php echo $this->Form->end('Submit'); ?>
</div>