function initialize() {
	var lat = json[facility_number].lat;
	var lng = json[facility_number].lng;
	var zoom = json[facility_number].zoom;
	var infoWindow = json[facility_number].description;

	var myLatlng = new google.maps.LatLng(lat,lng);
	var mapOptions = {
		zoom: zoom,	
		center: myLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

	var infowindow = new google.maps.InfoWindow({
		content: '<div class="infoWindow">' + infoWindow + '</div>'
	});

	marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		animation: google.maps.Animation.DROP,
	});

	google.maps.event.addListener(marker, "click", function() {
		infowindow.open(map,marker);
	});

	setTimeout(function() {infowindow.open(map,marker);}, 1000);
}
google.maps.event.addDomListener(window, "load", initialize);