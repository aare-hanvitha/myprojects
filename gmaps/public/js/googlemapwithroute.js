$(document).ready(function(){
    window.onload = function () {
        //debugger;
        // var markers = [
        //     {
        //         "lat": 26.1403695121651,
        //         "lng": -80.1565650758149,
        //         "description": "AutoRefresh",
        //         "title": "13"           
        //     },
        //     {
        //         "lat": 26.0885573,
        //         "lng": -80.1674153,
        //         "description": "AutoRefresh",
        //         "title": "16"
        //     },
        //     {
        //         "lat": 26.06115817768825,
        //         "lng": -80.18828242006526,
        //         "description": "AutoRefresh",
        //         "title": "18"
        //     },
        //     {
    
        //         "lat": 41.1211273197947,
        //         "lng": -73.43721731751968,            
        //         "description": "AutoRefresh",            
        //         "title": "19",
        //     },
        //     {
    
        //         "lat": 26.061172485351562,
        //         "lng": -80.18840413500584,
        //         "description": "AutoRefresh",
        //         "title": "63"
        //     },
        //     {
    
        //         "lat": 26.10054743143989,
        //         "lng": -80.12692825801687,
        //         "description": "AutoRefresh",
        //         "title": "8258"
        //     },
        //     {
    
        //         "lat": 26.061172485351562,
        //         "lng": -80.18840413500584,
        //         "description": "AutoRefresh",
        //         "title": "8406"
        //     },
        //     {
        //         "lat": 19.7180688,
        //         "lng": -72.2685822,
        //         "description": "AutoRefresh",
        //         "title": "9957"
    
        //     },
        //     {
        //         "lat": 26.086629981767327,
        //         "lng": -80.173572444118,
        //         "description": "AutoRefresh",
        //         "title": "10124"
        //     }
        // ];

        var markers=getDriver();
        var lat = lang = '';
        if(markers.length > 0){
             lat = markers[0].lat;
             lang = markers[0].lng;

             var mapOptions = {
            
                center: new google.maps.LatLng(lat, lang),
                // center: new google.maps.LatLng(lat, lng),
                 zoom: 16,
                 //maxZoom: 12,
                 //minZoom: 2,
                 mapTypeId: google.maps.MapTypeId.ROADMAP,
                 marker: false
             };
         
             var map = new google.maps.Map(document.getElementById("dvCanvas"), mapOptions);
             var infoWindow = new google.maps.InfoWindow();
             var lat_lng = new Array();
             var latlngbounds = new google.maps.LatLngBounds();
         
             //  var iconBase = 'http://earth.google.com/images/kml-icons/track-directional/';
         
             for (i = 0; i < markers.length; i++) {
                 var data = markers[i];
                 var myLatlng = new google.maps.LatLng(data.lat, data.lng);
                 var icon = "";
                 //  alert(data.title);
                 if (data.title.includes('Pick')) {
                     icon = "green";
                     //alert(1);
                 }
                 else if (data.title.includes('Drop')) {
                     icon = "red";
                 }
                 else if (data.title.includes('GMap')) {
                     icon = "blue";
                 }
                 else if (data.title.includes('Transit')) {
                     icon = "yellow";
                 }
                 
                 lat_lng.push(myLatlng);
                
                 icon = "https://maps.google.com/mapfiles/ms/icons/" + icon + ".png";
                 var marker = new google.maps.Marker({
                     position: myLatlng,
                     map: map,
                     title: data.title,
                     animation: google.maps.Animation.DROP,
                     offset: '100%',
                     labelAnchor: new google.maps.Point(5, 40),
                     //label: data.title+i,
                     labelInBackground: false,
                     icon: new google.maps.MarkerImage(icon)
                     //icon: pinSymbol('yellow')
                 });
                 var iconsetngs = {
                     path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW
                    // path: google.maps.SymbolPath.Polyline
                 };
         
                 var polylineoptns = {
                     path: markers[i],
                     strokeOpacity: 0.8,
                     strokeWeight: 3,
                     map: map,
                     icons: [{
                         icon: iconsetngs,
                         repeat: '55px',
                         offset: '100%'
                     }]
                 };
                 latlngbounds.extend(marker.position);
         
                 (function (marker, data) {
                     google.maps.event.addListener(marker, "mouseover", function (e) {
                         infoWindow.setContent(data.description);
                         infoWindow.open(map, marker);
                     });
                 })(marker, data);
             }
         
             // map.setCenter(latlngbounds.getCenter());
             // map.fitBounds(latlngbounds);
             //***********ROUTING****************//
         
             //Initialize the Path Array
             var path = new google.maps.MVCArray();
         
             //Initialize the Direction Service
             var service = new google.maps.DirectionsService();
         
             var poly = new google.maps.Polyline(polylineoptns);
             //var service = new google.maps.DirectionsService();
             //var directions = new google.maps.DirectionsRenderer({ suppressMarkers: true });
             function makeMarker(position, icon, title) {
                 new google.maps.Marker({
                     position: position,
                     map: map,
                     icon: "https://maps.google.com/mapfiles/kml/shapes/" + 'library_maps.png',
                     title: title,
                     Size: new google.maps.Size(2, 6)
                 });
             }
         
             //Loop and Draw Path Route between the Points on MAP
             for (var i = 0; i < lat_lng.length; i++) {
                 if ((i + 1) < lat_lng.length) {
                     var src = lat_lng[i];
                     var des = lat_lng[i + 1];
                     path.push(src);
                     poly.setPath(path);
                     service.route({
                         origin: src,
                         destination: des,
                         optimizeWaypoints: false,
                         travelMode: google.maps.DirectionsTravelMode.DRIVING
                     }, function (result, status) {
         
                         if (status == google.maps.DirectionsStatus.OK) {
                             //var leg = result.routes[0].legs[0];
                             // Sets the map on all markers in the array.
         
         
                             for (var i = 0, len = result.routes[0].overview_path.length; i < len; i++) {
                              //  path.push(result.routes[0].overview_path[i]);
                                
                                 var leg = result.routes[0].legs[i];
                                if(leg !=undefined){
                                 // path.push(result.routes[0].length);
                                 makeMarker(leg.end_location, icon, 'Current Position');
         
                                }
                                
                             }
                             //  makeMarker(leg.end_location, icon, 'Current Position');
                         }
                         //if (lat_lng.length >= lenth) {
                         //   makeMarker(leg.end_location, icon, 'Current Position');
                         // }
                     });
                     //makeMarker(leg.end_location, icon, 'endPoint');
                 }
             }


        }else{
            alert('Location details are not submitted to this driver');
        }
           
        // markers[0].lat = '';
        // markers[0].lng = '';

       
    }
})

// const passData1 = {
//     "userId": 9443,
//     "fromDate": fromDate.toISOString(),
//     "toDate": toDate.toISOString(),
//     "companyId": 4091,
//     "duration": duration
//   }

function getDriver() {
    let output;
    let userId = localStorage.getItem("userId");
    let compId = localStorage.getItem("companyId");
    if(localStorage.getItem("selDate")){
        // Date Conversion

    var inputDate = localStorage.getItem("selDate");

    // Parse the input date
    var date = new Date(inputDate);

    // Extract year, month, and day components
    var year = date.getFullYear();
    var month = String(date.getMonth() + 1).padStart(2, '0'); // Month is 0-based
    var day = String(date.getDate()).padStart(2, '0');

    // Create the formatted date string
    var formattedDate = year + "-" + month + "-" + day;

    // // End
    }else{
            const date = new Date();

            let day = date.getDate();
            let month = date.getMonth() + 1;
            let year = date.getFullYear();

            // This arrangement can be altered based on how we want the date's format to appear.
            var formattedDate = `${year}-${month}-${day}`;
           
        }

    $.ajax({
        type: 'POST',
        //url: 'https://services.bookashuttle.net/api/GoogleMaps/GetLatLangDriver?userId='+userId+'&companyId='+compId+'&status=false&date=2023-10-30',
        url: 'https://services.bookashuttle.net/api/GoogleMaps/GetLatLangDriver',
        data: JSON.stringify({
            userId: userId,
            companyId: compId,
            status: false,
            date: formattedDate
            }),
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
              },
        async: false,
        success: function (res) {
           console.log(res);
            output=res;
        },
        error: function () {
            alert("error");
        }
    });

    return output;


}
