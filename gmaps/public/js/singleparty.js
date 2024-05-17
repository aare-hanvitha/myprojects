
$(document).ready(function () {

            function initialize() {
                var markers = [
                    {
                        "lat": 26.1403695121651,
                        "lng": -80.1565650758149,
                        "description": "Pick",
                        "title": "13"           
                    },
                    {
                        "lat": 26.0885573,
                        "lng": -80.1674153,
                        "description": "Pick",
                        "title": "16"
                    },
                ]

                
                var markerVisible = true;
                if ("geolocation" in navigator) {
                    // Geolocation is available
                    navigator.geolocation.getCurrentPosition(function(position) {
                        let latitude = position.coords.latitude;
                        let longitude = position.coords.longitude;
                        localStorage.setItem("currentLat",latitude);
                        localStorage.setItem("currentLng",longitude);
                    });
                  } else {
                    // Geolocation is not available in this browser
                    alert("Geolocation is not available in your browser");
                  }

                
                  if(markers.length == 0 ){
                    markers = [
                        {
                        "lat": localStorage.getItem("currentLat"),
                        "lng": localStorage.getItem("currentLng"),
                        "description": "Pick",
                        "title": "13"           
                        }
                    ]
                    markerVisible = false;
                }


                    var myLatlng = new google.maps.LatLng(markers[0].lat, markers[0].lng);
                    var center = myLatlng;

                    var map = new google.maps.Map(document.getElementById('dvCanvas'), {
                        zoom: 11,
                        center: myLatlng
                    });
 
  
                var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
                    var infoWindow = new google.maps.InfoWindow();
                for (i = 0; i < markers.length; i++) {
                    var data = markers[i];
                    var myLatlng = new google.maps.LatLng(data.lat, data.lng);
                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        title: data.title,
                        icon: iconBase + 'library_maps.png' 
                    });
                    map.setCenter(center);
                    (function (marker, data) {
                        google.maps.event.addListener(marker, "click", function (e) {
                            infoWindow.setContent(data.description);
                            infoWindow.open(map, marker);
                        });
                    })(marker, data);
                }
                if(!markerVisible){
                    marker.setMap(null);
                }
                
}
google.maps.event.addDomListener(window, 'load', initialize);
 
}); 