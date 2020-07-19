@extends('layouts.appbar')

@section('content')
<div class="card border-primary mb-3" >    
    <h5 class="card-header bg-info">MAP</h5>
    <div id="map" style="width: 1260px; height: 550px"></div>

    <script src="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.js">
    </script>

    <script>

	var offres = {!! json_encode($locations->toArray(), JSON_HEX_TAG) !!};
    

        var map = L.map('map').setView([32.337557, -6.352975], 8);
        mapLink = 
            '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        moop=L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
            }).addTo(map);

            map.on('click', function(e) {
                window.location.href = "/gmapsadd/" +  e.latlng.lat + "/" +  e.latlng.lng;
            });



		for (var i = 0; i < offres.length; i++) {
            console.log( offres[i].lat);
            console.log( offres[i].lat);
			marker = new L.marker([offres[i].lat,offres[i].lng])
          
				.bindPopup(
                    "<img width='300px' height='200px' src=pictures/"+offres[i].image[0]+"> </br>"
                    +"<strong  style='color:black; '>adresse : "+offres[i].adresse+".</strong></br>"+
                    "<strong style='color:black; '>description  :"+offres[i].description
                    +"</strong><br><strong style='color:blue'>capacite : "+offres[i].capacite+"personnes. </strong><br>"+
                    "<strong style='color:blue'>surface : "+offres[i].superficie+"metres carré.</strong>"+"</br>"+"<strong style='color:red'>prix : "+offres[i].prix+" DH.</br>"
                    
                    )
				.addTo(map);
		}
               
    </script>
</div>
</div>
@endsection