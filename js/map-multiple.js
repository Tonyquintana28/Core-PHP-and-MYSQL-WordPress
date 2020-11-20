(function() {

	window.onload = function() {

		// Creating a new map
		window.center = new google.maps.LatLng(31.3535273, -101.908956);
		window.zoom = 6;
		window.map = new google.maps.Map(document.getElementById('map_home'), {
			center: center,
			zoom: zoom,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		// Creating a global infoWindow object that will be reused by all markers
		window.infoWindow = new google.maps.InfoWindow();
		window.latLng = [];
		window.latLng['zoom'] = [];
		window.marker = [];

		// Looping through the JSON data
		for (var i = 0, length = json.length; i < length; i++) {
			
				var data = json[i];
				window.latLng[i] = new google.maps.LatLng(data.lat, data.lng);

				// Creating a marker and putting it on the map
				marker[i] = new google.maps.Marker({
					position: latLng[i],
					map: map,
					title: data.title,
					animation: google.maps.Animation.DROP
				});

				// Creating a closure to retain the correct data, notice how I pass the current data in the loop into the closure (marker, data)
				(function(i, data) {

					// Attaching a click event to the current marker
					google.maps.event.addListener(marker[i], 'click', function(e) {
						infoWindow.setContent('<div class="infoWindow">'+data.description+'</div>');
						infoWindow.open(map, marker[i]);
					});
					google.maps.event.addListener(marker[i], 'mouseover', function(e) {
						var loc = $('.facilityDiv')[i]
						$(loc).slideDown(function() {
							$('.facilityDiv').removeClass('active');
							$(loc).addClass('active');
						});
						google.maps.event.trigger(marker[i], 'click');
					});

				})(i, data);
		}

		// Looping through the JSON data
		for (var i = 0, length = json.length; i < length; i++) {
			var data = json[i];
			latLng[data.title] = new google.maps.LatLng(data.lat, data.lng);
			latLng['zoom'][data.title] = data.zoom;
		}

	}

})();

$(document).ready(function() {
	$('.facilityDiv').mouseenter(function() {
		var locations = $('.facilityDiv')
		var id = $(locations).index(this);
		$(locations).removeClass('active');
		$(this).addClass('active');
		map.setZoom(json[id].zoom);
		map.panTo(latLng[id]);
		google.maps.event.trigger(marker[id], 'click');
	});
});