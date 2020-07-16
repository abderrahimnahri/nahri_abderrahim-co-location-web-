<!DOCTYPE html>
<html>
<head>
    <title>Simple Leaflet Map</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.css" />
</head>
<body>

    <div id="map" style="width: 600px; height: 400px"></div>

    <script src="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.js">
    </script>

    <script>

	var planes = {!! json_encode($locations->toArray(), JSON_HEX_TAG) !!};

        var map = L.map('map').setView([-41.3058, 174.82082], 8);
        mapLink = 
            '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        moop=L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
            }).addTo(map);

            map.on('click', function(e) {
                window.location.href = "/gmapsadd/" +  e.latlng.lat + "/" +  e.latlng.lng;
    //alert("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng)
});



		for (var i = 0; i < planes.length; i++) {
            console.log( planes[i].lat);
            console.log( planes[i].lat);
			marker = new L.marker([planes[i].lat,planes[i].lng])
				.bindPopup(planes[i].adresse+'description : '+planes[i].description)
				.addTo(map);
		}
               
    </script>
</body>
</html>