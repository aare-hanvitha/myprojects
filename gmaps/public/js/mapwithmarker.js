// var markers = [
//     {
//         "lat": 26.1403695121651,
//         "lng": -80.1565650758149,
//         "description": "Pick",
//         "title": "13"           
//     },
//     {
//         "lat": 26.0885573,
//         "lng": -80.1674153,
//         "description": "Pick",
//         "title": "16"
//     },
//     {
//         "lat": 26.06115817768825,
//         "lng": -80.18828242006526,
//         "description": "Drop",
//         "title": "Drop"
//     },
//     {

//         "lat": 41.1211273197947,
//         "lng": -73.43721731751968,            
//         "description": "Drop",            
//         "title": "Drop",
//     },
//     {

//         "lat": 26.061172485351562,
//         "lng": -80.18840413500584,
//         "description": "Pick",
//         "title": "Pick"
//     },
//     {

//         "lat": 26.10054743143989,
//         "lng": -80.12692825801687,
//         "description": "Pick",
//         "title": "Pick"
//     },
//     {

//         "lat": 26.061172485351562,
//         "lng": -80.18840413500584,
//         "description": "Drop",
//         "title": "8406"
//     },
//     {
//         "lat": 19.7180688,
//         "lng": -72.2685822,
//         "description": "Drop",
//         "title": "Drop"

//     },
//     {
//         "lat": 26.086629981767327,
//         "lng": -80.173572444118,
//         "description": "Pick",
//         "title": "10124"
//     }
// ];


var markers = null;

$(document).ready(function () {

    // Wrap your code in this function to ensure it runs after the document is fully loaded
    
    // Define a function that makes an API request and returns a Promise
    function fetchMarkerWithAction() {

         var resp = null;
        //return new Promise(function (resolve, reject) {
            // Data to be sent in the request
            var requestData = {
                "partyId": 3,
                "companyId": 1,
                "driverId": 96
            };

            // Perform the AJAX request
            $.ajax({
                type: 'POST',
                url: 'https://services.bookashuttle.net/api/GoogleMaps/MarkerWithActions',
                // dataType: 'json',
                data: JSON.stringify(requestData),
                contentType: 'application/json',
                async: false,
                success: function (response) {
                    
                    resp = response;

                   // console.log(resp);

                },
                error: function (error) {
                    // Reject the Promise with an error
                    //reject(error);
                }
            });
       // });
       return resp;
    }

    // Usage of the function and handling the Promise
    
//     fetchMarkerWithAction()
//         .then(function (data) {
//             // Handle the successful response
//             alert("Data retrieved: " + JSON.stringify(data));
//              //console.log(data[0]);
//             //markers = data[0];
//             // Further processing of the response data
//             for (var i = 0; i < data.length; i++) {
//                 var item = data[i];
//                 // Access and use other properties as needed
//                 // For example: console.log("Party Name: " + item.partyName);
//             }
//         })
//         .catch(function (error) {
//             // Handle errors that may occur during the API request
//             alert("Error occurred");
//         });

//         //console.log(markers);



//console.log(markers);

 








//----------Service Calling-------------//


// Define a function that makes an API request and returns a Promise


//window.onload = function () {

    markers = fetchMarkerWithAction();

    // console.log(markers);
    

    var mapOptions = {
        center: new google.maps.LatLng(markers[0].longitude, markers[0].longitude),
        zoom: 5,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        marker: true
    };
    function pinSymbol(color) {
        return {
            path: 'M 0,0 C -2,-20 -10,-22 -10,-30 A 10,10 0 1,1 10,-30 C 10,-22 2,-20 0,0 z',
            fillColor: color,
            fillOpacity: 1,
            strokeColor: '#011',
            strokeWeight: 2,
            scale: 1
        };
    }
    var infoWindow = new google.maps.InfoWindow();
    var map = new google.maps.Map(document.getElementById("dvCanvas"), mapOptions);
    var lat_lng = new Array();
    var latlngbounds = new google.maps.LatLngBounds();
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
    for (i = 0; i < markers.length; i++) {
        var data = markers[i]
        var myLatlng = new google.maps.LatLng(data.latitude, data.longitude);
        lat_lng.push(myLatlng);

        for (i = 0; i < markers.length; i++) {
            var data = markers[i]
            var myLatlng = new google.maps.LatLng(data.latitude, data.longitude);
            var icon = "";
            //  alert(data.title);
            if (data.message.includes('Pick')) {
                icon = "yellow";
             
            }
            else if (data.message.includes('Drop')) {
                icon = "green";
            }
            //else {
            //    icon = "red";
            //}

            lat_lng.push(myLatlng);
            icon = "https://maps.google.com/mapfiles/ms/icons/" + icon + ".png";
            //var marker = new MarkerWithLabel({
            //    position: myLatlng,
            //    map: map,
            //    //draggable: true,
            //    //raiseOnDrag: true,
            //    labelContent: substr,
            //    labelAnchor: new google.maps.Point(5, 40),
            //    labelClass: "labels", // the CSS class for the label
            //    labelInBackground: false,
            //    //icon: pinSymbol('yellow')
            //    icon: iconBase+'arrow.png'
            //});

            var marker = new google.maps.Marker({
                //  var marker = new MarkerWithLabel({
                position: myLatlng,
                map: map,
                title: data.message,
                animation: google.maps.Animation.DROP,
                //offset: '100%',
                // labelAnchor: new google.maps.Point(5, 40),
                //  label: data.title ,
                // labelInBackground: false,
                icon: new google.maps.MarkerImage(icon)
                //icon: pinSymbol('yellow')
            });
           

            (function (marker, data) {
                google.maps.event.addListener(marker, "mouseover", function (e) {
                    var inputDate = new Date(data.createdDate);
var options = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
    hour: "numeric",
    minute: "numeric",
    hour12: true,
};

var formattedDate = inputDate.toLocaleDateString("en-US", options);

// console.log(formattedDate);
                    infoWindow.setContent(data.message+"- "+formattedDate);
                    infoWindow.open(map, marker);
                });
            })(marker, data);

            latlngbounds.extend(marker.position);
        }
    }
    map.setCenter(latlngbounds.getCenter());
    map.fitBounds(latlngbounds);
    //***********ROUTING****************//

    //Initialize the Path Array
    var path = new google.maps.MVCArray();

    //Initialize the Direction Service
    var service = new google.maps.DirectionsService();

    // Define a symbol using a predefined path (an arrow)
    // supplied by the Google Maps JavaScript API.
    var lineSymbol = {
        path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW
    };
//}

});
