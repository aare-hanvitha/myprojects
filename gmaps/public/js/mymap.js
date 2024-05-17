
var marker;
var map;
var AvDriverList = [];
var UnAvDriverList = [];
var DispatchList = [];
var ReservationList = [];
var DriverList = [];
var PendingList = [];
var Avmarker = [];
var UnAvmarker = [];
var partiesmarker;
var chkposotion;
var driverlist;
var PartyList;
var status = { Avilable: 0, UnAvilable: 1, Dispatch: 2, Reservation: 3 };
var companyId;
var userId;
var userName;
var position;
var image;
var icon;
var numDeltas = 80;
var delay = 50; //milliseconds
var j = 0;
var deltaLat;
var deltaLng;
var tick = 100;
var car = "M17.402,0H5.643C2.526,0,0,3.467,0,6.584v34.804c0,3.116,2.526,5.644,5.643,5.644h11.759c3.116,0,5.644-2.527,5.644-5.644 V6.584C23.044,3.467,20.518,0,17.402,0z M22.057,14.188v11.665l-2.729,0.351v-4.806L22.057,14.188z M20.625,10.773 c-1.016,3.9-2.219,8.51-2.219,8.51H4.638l-2.222-8.51C2.417,10.773,11.3,7.755,20.625,10.773z M3.748,21.713v4.492l-2.73-0.349 V14.502L3.748,21.713z M1.018,37.938V27.579l2.73,0.343v8.196L1.018,37.938z M2.575,40.882l2.218-3.336h13.771l2.219,3.336H2.575z M19.328,35.805v-7.872l2.729-0.355v10.048L19.328,35.805z";
var bear = 150;
window.onblur = function () { window.blurred = true; };
window.onfocus = function () { window.blurred = false; };

// var response = [
//     {
//         "id": null,
//         "partyId": null,
//         "latitude": 26.08667006008983,
//         "longitude": -80.17378137227601,
//         "prevLatitude": 26.08667006008983,
//         "prevLongitude": -80.17378137227601,
//         "toolTip": null,
//         "infoHtml": "AutoRefresh",
//         "iconImage": null,
//         "fromLocAddress": null,
//         "toLocAddress": null,
//         "partyStatus": null,
//         "pickUpNotes": null,
//         "dropOffNotes": null,
//         "status": "False",
//         "partyType": null,
//         "locFromTo": null,
//         "userId": "13",
//         "createdDate": null,
//         "size": null,
//         "bearing": 0
//     },
//     {
//         "id": null,
//         "partyId": null,
//         "latitude": 26.0921317,
//         "longitude": -80.1373287,
//         "prevLatitude": 26.0923968,
//         "prevLongitude": -80.137198,
//         "toolTip": null,
//         "infoHtml": "StartingPoint",
//         "iconImage": null,
//         "fromLocAddress": null,
//         "toLocAddress": null,
//         "partyStatus": null,
//         "pickUpNotes": null,
//         "dropOffNotes": null,
//         "status": "False",
//         "partyType": null,
//         "locFromTo": null,
//         "userId": "16",
//         "createdDate": null,
//         "size": null,
//         "bearing": -2.72476176786786
//     },
//     {
//         "id": null,
//         "partyId": null,
//         "latitude": 26.06115855744673,
//         "longitude": -80.1883342490347,
//         "prevLatitude": 26.06115059463871,
//         "prevLongitude": -80.18832637004571,
//         "toolTip": null,
//         "infoHtml": "StartingPoint",
//         "iconImage": null,
//         "fromLocAddress": null,
//         "toLocAddress": null,
//         "partyStatus": null,
//         "pickUpNotes": null,
//         "dropOffNotes": null,
//         "status": "False",
//         "partyType": null,
//         "locFromTo": null,
//         "userId": "18",
//         "createdDate": null,
//         "size": null,
//         "bearing": -0.7266315240278679
//     },
//     {
//         "id": null,
//         "partyId": null,
//         "latitude": 41.1212357506539,
//         "longitude": -73.43703310943529,
//         "prevLatitude": 41.12122217197094,
//         "prevLongitude": -73.43704945414648,
//         "toolTip": null,
//         "infoHtml": "StartingPoint",
//         "iconImage": null,
//         "fromLocAddress": null,
//         "toLocAddress": null,
//         "partyStatus": null,
//         "pickUpNotes": null,
//         "dropOffNotes": null,
//         "status": "False",
//         "partyType": null,
//         "locFromTo": null,
//         "userId": "19",
//         "createdDate": null,
//         "size": null,
//         "bearing": 0.7365448659760419
//     },
//     {
//         "id": null,
//         "partyId": null,
//         "latitude": 26.0929265,
//         "longitude": -80.1361994,
//         "prevLatitude": 26.0929265,
//         "prevLongitude": -80.1361994,
//         "toolTip": null,
//         "infoHtml": "Picked up",
//         "iconImage": null,
//         "fromLocAddress": null,
//         "toLocAddress": null,
//         "partyStatus": null,
//         "pickUpNotes": null,
//         "dropOffNotes": null,
//         "status": "False",
//         "partyType": null,
//         "locFromTo": null,
//         "userId": "63",
//         "createdDate": null,
//         "size": null,
//         "bearing": 0
//     },
//     {
//         "id": null,
//         "partyId": null,
//         "latitude": 26.03424364233076,
//         "longitude": -80.12959585446805,
//         "prevLatitude": 26.03424364233076,
//         "prevLongitude": -80.12959585446805,
//         "toolTip": null,
//         "infoHtml": "StartingPoint",
//         "iconImage": null,
//         "fromLocAddress": null,
//         "toLocAddress": null,
//         "partyStatus": null,
//         "pickUpNotes": null,
//         "dropOffNotes": null,
//         "status": "False",
//         "partyType": null,
//         "locFromTo": null,
//         "userId": "8258",
//         "createdDate": null,
//         "size": null,
//         "bearing": 0
//     },
//     {
//         "id": null,
//         "partyId": null,
//         "latitude": 26.061172485351562,
//         "longitude": -80.18840413500584,
//         "prevLatitude": 26.061172485351562,
//         "prevLongitude": -80.18840413500584,
//         "toolTip": null,
//         "infoHtml": "StartingPoint",
//         "iconImage": null,
//         "fromLocAddress": null,
//         "toLocAddress": null,
//         "partyStatus": null,
//         "pickUpNotes": null,
//         "dropOffNotes": null,
//         "status": "False",
//         "partyType": null,
//         "locFromTo": null,
//         "userId": "8406",
//         "createdDate": null,
//         "size": null,
//         "bearing": 0
//     },
//     {
//         "id": null,
//         "partyId": null,
//         "latitude": 19.7183801,
//         "longitude": -72.2688852,
//         "prevLatitude": 19.7183803,
//         "prevLongitude": -72.2688854,
//         "toolTip": null,
//         "infoHtml": "StartingPoint",
//         "iconImage": null,
//         "fromLocAddress": null,
//         "toLocAddress": null,
//         "partyStatus": null,
//         "pickUpNotes": null,
//         "dropOffNotes": null,
//         "status": "False",
//         "partyType": null,
//         "locFromTo": null,
//         "userId": "9957",
//         "createdDate": null,
//         "size": null,
//         "bearing": 2.386389655761397
//     },
//     {
//         "id": null,
//         "partyId": null,
//         "latitude": 26.086629981767327,
//         "longitude": -80.173572444118,
//         "prevLatitude": 26.086629981767327,
//         "prevLongitude": -80.173572444118,
//         "toolTip": null,
//         "infoHtml": "StartingPoint",
//         "iconImage": null,
//         "fromLocAddress": null,
//         "toLocAddress": null,
//         "partyStatus": null,
//         "pickUpNotes": null,
//         "dropOffNotes": null,
//         "status": "False",
//         "partyType": null,
//         "locFromTo": null,
//         "userId": "10124",
//         "createdDate": null,
//         "size": null,
//         "bearing": 0
//     }
// ];


// var parties=[
//     {
//         "partyId": 1086476,
//         "latitude": "28.36977",
//         "longitude": "-80.1734476118111",
//         "partyName": "LAI",
//         "partyTypeId": 11,
//         "status": 7,
//         "locFromTo": "Rodeway Inn & Suites 84  HotelFtl >> Adventure of the Seas T18 PEV",
//         "size": 2
//     },
//     {
//         "partyId": 1086382,
//         "latitude": "26.0860838",
//         "longitude": "-80.1733523",
//         "partyName": "vassel j",
//         "partyTypeId": 12,
//         "status": 7,
//         "locFromTo": "Rodeway Inn & Suites 84  HotelFtl >> Adventure of the Seas T18 PEV",
//         "size": 2
//     },
//     {
//         "partyId": 1086382,
//         "latitude": "24.0860838",
//         "longitude": "-80.1733523",
//         "partyName": "vassel j",
//         "partyTypeId": 12,
//         "status": 59,
//         "locFromTo": "Rodeway Inn & Suites 84  HotelFtl >> Adventure of the Seas T18 PEV",
//         "size": 2
//     }
// ];

var result=getZipCode();

var iconBase = 'https://www.shuttleq.net/img/newimages/';

var icons = {
    PendingImage: {
        url: iconBase + 'pink_user.png'
    },
    DispatchImage: {
        url: iconBase + 'red_user.png'
    },
    RegervationImage: {
        url: iconBase + 'blue_user.png'
    },
    AvilableImage: {

        path: car,
        scale: .8,
        strokeColor: 'black',
        strokeWeight: .10,
        fillOpacity: 1,
        fillColor: 'Green',
        offset: '5%'
    },
    UnAvilableImage: {
        path: car,
        scale: .8,
        strokeColor: 'black',
        strokeWeight: .10,
        fillOpacity: 1,
        fillColor: '#FF0000',
        offset: '5%'
    }

};

window.onload = function () {
    // status = { Avilable: 0, UnAvilable: 1, Dispatch: 2, Reservation: 3 };

    companyId = 4091;
    userName = 'jagadeesh';
    userId = '9911';
    InitMap();


    if (companyId !== "") {
        chkAvilable.checked = true;
       
    }
    else {
        window.location.href = "../mLogin.aspx";
    }
};



function ClearMarkers(markerlist) {
    for (var i = 0; i < markerlist.length; i++) {
        markerlist[i].setMap(null);
    }
    markerlist = [];
}

function animatedMove(marker, t, current, moveto, Updateimage, bearing) {
    {
        var lat = current.lat();
        var lng = current.lng();

        var deltalat = (moveto.lat() - current.lat()) / 100;
        var deltalng = (moveto.lng() - current.lng()) / 100;
        if ((deltalat != 0 && deltalng != 0)) {
            Updateimage.rotation = Bearing;
            km_h = 50;

            var step = (km_h * 1000 * delay) / 3600000;
            var delay = 10 * t;
            for (var i = 0; i < 100; i++) {
                (function (ind) {
                    setTimeout(
                        function () {
                            var lat = marker.position.lat();
                            var lng = marker.position.lng();
                            var positions = mark - er.getPosition();
                            lat += deltalat;
                            lng += deltalng;
                            latlng = new google.maps.LatLng(lat, lng);
                            var heading = google.maps.geometry.spherical.computeHeading(positions, latlng);
                            if (heading == 0) {
                                heading = bear;
                            }

                            Updateimage.rotation = heading;
                            Updateimage.anchor = new google.maps.Point(10, 25);
                            marker.setPosition(latlng);
                            marker.setIcon(Updateimage);

                        }, delay * ind

                    );
                })(i)
            }
        } else {
            Updateimage.rotation = Bearing;
            var latlng = new google.maps.LatLng(lat, lng);
            //var newLatLang = bendAndSnap(latlng);
            //var onRoadLatLng = new google.maps.LatLng(newLatLang.latitude, newLatLang.longitude);
            Updateimage.anchor = new google.maps.Point(10, 25);
            marker.setPosition(latlng);
            marker.setIcon(Updateimage);
        }
    }
}


function AddPartyMakerposition(response, markerlist, image, from) {
    //alert(image.icon);
    //for (var i = 0; i < DispatchList.length; i++) {
    //    DispatchList[i].setMap(null);
    //    delete DispatchList[i];
    //    }
    //    partymarkerlist = [];

    for (var i = 0; i < response.length; i++) {

        var data = response[i];

        var myLatlng = new google.maps.LatLng(data.latitude, data.longitude);

        partiesmarker = new google.maps.Marker
            ({
                //position: myLatlng,
                map: map,
                icon: image.url,
                visible: true
            });

        partiesmarker.setPosition(myLatlng);
        partiesmarker.setTitle(data.partyName);

        if (from == "Dispatch") {

            DispatchList.push(partiesmarker);
        }
        if (from == "Reservation") {
            ReservationList.push(partiesmarker);
        }
        if (from == "Pending") {
            PendingList.push(partiesmarker);
        }
        //  attachSecretMessage(partiesmarker[i], data);
        // map.setCenter(myLatlng);
        //marker.setAnimation(google.maps.Animation.NONE);
    };


    //  markerlist = [];
}

function InitMap() {
    var latitude;
    var longitude;  
    
    var geocoder = new google.maps.Geocoder();
    var result=getZipCode();

var address=result.zipCode;

    geocoder.geocode({ 'address': address }, function (results, status) {
        var mapOptions;
        if (status == google.maps.GeocoderStatus.OK) {
            latitude = results[0].geometry.location.lat();
            longitude = results[0].geometry.location.lng();
            mapOptions = {
                center: { lat: latitude, lng: longitude },
                zoom: 14,
                maxZoom: 18,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                clickableIcons: false
            };

            map = new google.maps.Map(document.getElementById("dvCanvas"), mapOptions);

        } else {
            latitude = 26.085916;
            longitude = -80.173402;
            mapOptions = {
                center: { lat: latitude, lng: longitude },
                zoom: 14,
                maxZoom: 18,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                clickableIcons: false
            };

            map = new google.maps.Map(document.getElementById("dvCanvas"), mapOptions);

        }
    });

}

function Refresh() {

    var response = getLatLang();
   if(response!==null){
   
    
    if (chkAvilable.checked == true) {
        var result = response;
      
        //ClearMarkers(AvDriverList);
        driverlist = result.filter(function (el) {
            return (el.status == "False");
        });
        

        if (driverlist.length == AvDriverList.length) {            
            UpdateAvlMarker(driverlist, AvDriverList, icons.AvilableImage);
        }
        else {
            for (var i = 0; i < AvDriverList.length; i++) {
                AvDriverList[i].setMap(null);
                delete AvDriverList[i];
            }
            AvDriverList = [];
            AddAvlMarker(driverlist, AvDriverList, icons.AvilableImage);
        }

        //Makerposition(driverlist, AvDriverList, icons.AvilableImage);
    }
    else {

        for (var i = 0; i < AvDriverList.length; i++) {
            AvDriverList[i].setMap(null);
            delete AvDriverList[i];
        }

        // ClearMarkers(AvDriverList);
        AvDriverList = [];
    }

    if (chkUnAvilable.checked == true) {
        //ClearMarkers(UnAvDriverList);
        driverlist = result.filter(function (el) {
            return (el.status == "True");
        });

        if (driverlist.length == UnAvDriverList.length) {
            //  alert("UpdateunAvila");
            UpdateUnAvlMarker(driverlist, UnAvDriverList, icons.UnAvilableImage);
        }
        else {
            //alert("InsertUnAvil");
            for (var i = 0; i < UnAvDriverList.length; i++) {
                UnAvDriverList[i].setMap(null);
                delete UnAvDriverList[i];
            }
            UnAvDriverList = [];
            AddUnAvlMarker(driverlist, UnAvDriverList, icons.UnAvilableImage);
        }
        // Makerposition(driverlist, UnAvDriverList, icons.UnAvilableImage);
    }
    else {
        for (var i = 0; i < UnAvDriverList.length; i++) {
            UnAvDriverList[i].setMap(null);
            delete UnAvDriverList[i];
        }
        UnAvDriverList = [];
        // ClearMarkers(UnAvDriverList);
    }
    var parties=getParties();

    if (parties != null) {
   
        var resultParty = parties;
        
     
        if (chkDispatch.checked == true) {
           
            PartyList = resultParty.filter(function (el) {
                return (el.partyTypeId == "11" && el.status == "7");
            });
        
            if (PartyList.length == DispatchList.length) {
    
            }
            else {
               
                for (var i = 0; i < DispatchList.length; i++) {
                    DispatchList[i].setMap(null);
                    delete DispatchList[i];
                }
                DispatchList = [];
                AddPartyMakerposition(PartyList, DispatchList, icons.DispatchImage, "Dispatch");
            }
        }
        else {
    
            for (var i = 0; i < DispatchList.length; i++) {
                DispatchList[i].setMap(null);
                delete DispatchList[i];
            }
            DispatchList = [];
        }
        if (chkReservation.checked == true) {
            PartyList = resultParty.filter(function (el) {
                return (el.partyTypeId == "12" && el.status == "7");
            });
    
            if (PartyList.length == ReservationList.length) {
    
            }
            else {
                for (var i = 0; i < ReservationList.length; i++) {
                    ReservationList[i].setMap(null);
                    delete ReservationList[i];
                }
                ReservationList = [];
                AddPartyMakerposition(PartyList, ReservationList, icons.RegervationImage, "Reservation");
    
            }
        }
        else {
            for (var i = 0; i < ReservationList.length; i++) {
                ReservationList[i].setMap(null);
                delete ReservationList[i];
            }
            ReservationList = [];
        }
    
        if (chkPending.checked == true) {
            PartyList = resultParty.filter(function (el) {
                return (el.status == "59");
            });
            if (PartyList.length == PendingList.length) {
    
            }
            else {
                for (var i = 0; i < PendingList.length; i++) {
                    PendingList[i].setMap(null);
                    delete PendingList[i];
                }
                PendingList = [];
                AddPartyMakerposition(PartyList, PendingList, icons.PendingImage, "Pending");
    
            }
        }
        else {
            for (var i = 0; i < PendingList.length; i++) {
                PendingList[i].setMap(null);
                delete PendingList[i];
            }
            PendingList = [];
        }
    }
}
}






function attachSecretMessage(marker, data) {
    var contentString;


    if (data.LocFromTo != null) {
        contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<div id="bodyContent">' +
            '<p><b>' + data.infoHtml + '(' + data.Size + ')' + '</b></p>' +
            '<p>' + data.LocFromTo + '</p>' +
            '</div>' +
            '</div>';

    }
    else {
        contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<div id="bodyContent">' +
            '<p><b>' + data.infoHtml + '</b></p>' +
            '</div>' +
            '</div>';
    }

    google.maps.event.addListener(marker, 'click', function () {
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        infowindow.open(map, marker);
    });
}
//// Avilable Drivers Markers Add and Update
function AddAvlMarker(Addresponse, Addmarkerlist, Addimage) {
 
    if (Addresponse.length > 0) {
        for (var i = 0; i < Addresponse.length; i++) {

            var data = Addresponse[i];
           
            
            var previousLatLng = new google.maps.LatLng(data.prevLatitude.toFixed(7), data.prevLongitude.toFixed(7));
            //alert('P: '+ previousLatLng);
            var myLatlng = new google.maps.LatLng(data.latitude.toFixed(7), data.longitude.toFixed(7));
            //alert('C: '+ myLatlng);
            var baring = google.maps.geometry.spherical.computeHeading(previousLatLng, myLatlng);
            //alert('Bea: '+ baring);
            Avmarker[i] = new google.maps.Marker
                ({
                    map: map,
                    visible: true
                });
                //alert(Avmarker[i]);
            Addimage.rotation = baring;
            Avmarker[i].setIcon(Addimage);
            Avmarker[i].setTitle(data.userName);
            Avmarker[i].setPosition(myLatlng);
            Addmarkerlist.push(Avmarker[i]);
            attachSecretMessage(Avmarker[i], data);
        };
    } else {
        ClearMarkers(Addmarkerlist);
    }

}

function UpdateAvlMarker(Updateresponse, Updatemarkerlist, Updateimage) {


    for (var i = 0; i < Updateresponse.length; i++) {

        var data = Updateresponse[i];
      
//alert(data.length);
        var myLatlng = new google.maps.LatLng(data.latitude, data.longitude);
        var previousLatLng = new google.maps.LatLng(data.prevLatitude, data.prevLongitude);
        var baring = google.maps.geometry.spherical.computeHeading(previousLatLng, myLatlng);
        var prevlat = data.prevLatitude;
        var prevlng = data.prevLongitude;
        if (prevlat == Avmarker[i].getPosition().lat() && prevlng == Avmarker[i].getPosition().lng()) {

            Updateimage.rotation = baring;
            Avmarker[i].setTitle(data.userName);
            Avmarker[i].setPosition(myLatlng);
            Avmarker[i].setIcon(Updateimage);

            attachSecretMessage(Avmarker[i], data);
        }
        else {
//alert(1);
            position = Avmarker[i].getPosition();
            Avmarker[i].setTitle(data.userName);
            Updateimage.rotation = baring;
            animatedMove(Avmarker[i], .50, Avmarker[i].position, myLatlng, Updateimage, baring);
            attachSecretMessage(Avmarker[i], data);
        }
    };
}
/// UnAvilable Driver Markers Add and Update
function AddUnAvlMarker(Addresponse, Addmarkerlist, Addimage) {
    if (Addresponse.length > 0) {
        for (var i = 0; i < Addresponse.length; i++) {

            var data = Addresponse[i];
            var previousLatLng = new google.maps.LatLng(data.prevLatitude, data.prevLongitude);
            var myLatlng = new google.maps.LatLng(data.latitude, data.longitude);
            var baring = google.maps.geometry.spherical.computeHeading(previousLatLng, myLatlng);
            UnAvmarker[i] = new google.maps.Marker
                ({
                    map: map,
                    visible: true
                });
            Addimage.rotation = baring;
            UnAvmarker[i].setIcon(Addimage);
            UnAvmarker[i].setTitle(data.userName);
            UnAvmarker[i].setPosition(myLatlng);

            Addmarkerlist.push(UnAvmarker[i]);
            attachSecretMessage(UnAvmarker[i], data);

        };
    } else {
        ClearMarkers(Addmarkerlist);
    }
}

function UpdateUnAvlMarker(Updateresponse, Updatemarkerlist, Updateimage) {

    for (var i = 0; i < Updateresponse.length; i++) {

        var data = Updateresponse[i];

        var myLatlng = new google.maps.LatLng(data.latitude, data.longitude);
        var previousLatLng = new google.maps.LatLng(data.prevLatitude, data.prevLongitude);
        var baring = google.maps.geometry.spherical.computeHeading(previousLatLng, myLatlng);

        var prevlat = data.prevLatitude;
        var prevlng = data.prevLongitude;

        if (prevlat == UnAvmarker[i].getPosition().lat() && prevlng == UnAvmarker[i].getPosition().lng()) {

            Updateimage.rotation = baring;
            UnAvmarker[i].setTitle(data.infoHtml);
            UnAvmarker[i].setPosition(myLatlng);
            UnAvmarker[i].setIcon(Updateimage);
            attachSecretMessage(UnAvmarker[i], data);
        }
        else {

            position = UnAvmarker[i].getPosition();
            UnAvmarker[i].setTitle(data.infoHtml);

            animatedMove(UnAvmarker[i], .50, UnAvmarker[i].position, myLatlng, Updateimage, baring);
            attachSecretMessage(UnAvmarker[i], data);

        }
    };
}

function animatedMove(marker, t, current, moveto, Updateimage, Bearing) {
    {

        var lat = current.lat();
        var lng = current.lng();

        var deltalat = (moveto.lat() - current.lat()) / 100;
        var deltalng = (moveto.lng() - current.lng()) / 100;
        if ((deltalat != 0 && deltalng != 0)) {
            Updateimage.rotation = Bearing;
            km_h = 50;

            var delay = 10 * t;
            for (var i = 0; i < 100; i++) {
                (function (ind) {
                    setTimeout(
                        function () {
                            var lat = marker.position.lat();
                            var lng = marker.position.lng();
                            var positions = marker.getPosition();
                            lat += deltalat;
                            lng += deltalng;
                            latlng = new google.maps.LatLng(lat, lng);
                            var heading = google.maps.geometry.spherical.computeHeading(positions, latlng);
                            if (heading == 0) {
                                heading = bear;
                            }

                            Updateimage.rotation = heading;
                            Updateimage.anchor = new google.maps.Point(10, 25);
                            marker.setPosition(latlng);
                            marker.setIcon(Updateimage);

                        }, delay * ind

                    );
                })(i)
            }
        } else {
            Updateimage.rotation = Bearing;
            var latlng = new google.maps.LatLng(lat, lng);
            Updateimage.anchor = new google.maps.Point(10, 25);
            marker.setPosition(latlng);
            marker.setIcon(Updateimage);
        }
    }
}

function attachSecretMessage(marker, data) {
    var contentString;


    if (data.LocFromTo != null) {
        contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<div id="bodyContent">' +
            '<p><b>' + data.infoHtml + '(' + data.Size + ')' + '</b></p>' +
            '<p>' + data.LocFromTo + '</p>' +
            '</div>' +
            '</div>';

    }
    else {
        contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<div id="bodyContent">' +
            '<p><b>' + data.infoHtml + '</b></p>' +
            '</div>' +
            '</div>';
    }

    google.maps.event.addListener(marker, 'click', function () {
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        infowindow.open(map, marker);
    });
}

function AvilableChek(s, e) {
    if (s.GetChecked() == true) {
        chkposotion = 0;
    }
    else {

        ClearMarkers(AvDriverList);
    }

}

function UnAvilableChek(s, e) {
    if (s.GetChecked() == true) {
        chkposotion = 1;
    }
    else {

        ClearMarkers(UnAvDriverList);
    }
}

function DispatchCheck(s, e) {
    if (s.GetChecked() == true) {
        chkposotion = 2;
    }
    else {

        ClearMarkers(DispatchList);
    }
}

function ReservationCheck(s, e) {
    if (s.GetChecked() == true) {
        chkposotion = 3;
    }
    else {

        ClearMarkers(ReservationList);
    }
}

function PendingCheck(s, e) {
    if (s.GetChecked() == true) {
        chkposotion = 4;
    }
    else {

        ClearMarkers(PendingList);
    }
}

function ClearMarkers(markerlist) {
    for (var i = 0; i < markerlist.length; i++) {
        markerlist[i].setMap(null);
    }
    markerlist = [];
}

function RedirectToTrack() {
    var url = "./DrGpsmaproute.aspx?UserId=" + userId + "&CompanyId=" + companyId + "&UserName=" + userName;

    window.location.href = url;
}

function bendAndSnap(myLatlng) {
    coords = '' + myLatlng.lat() + ',' + myLatlng.lng() + '';
    //location.hash = coords;
    var result;
    $.ajax({
        type: 'GET',
        url: 'https://roads.googleapis.com/v1/snapToRoads',
        data: {
            interpolate: false,
            key: 'AIzaSyADYWIGFSnn3DHlJblK0hntz5KQiwbD0hk',
            path: coords
        },
        async: false,
        success: function (resr) {
            var values = resr.snappedPoints;
            for (var i = 0; i < resr.snappedPoints.length; i++) {
                //var latlng = {
                //    'lat': data.snappedPoints[i].location.latitude,
                //    'lng': data.snappedPoints[i].location.longitude
                //}
                result = resr.snappedPoints[i].location;
            }

        },
        error: function () {
            alert("error");
        }
    });
    return result;
}

function getLatLang() {
   var output=null;
    $.ajax({
        type: 'POST',
        url: 'https://services.bookashuttle.net/api/GoogleMaps/GetLatLang',
        data: JSON.stringify({
            "companyId":1,
"status":false,
"date":"2023-10-30"
            }),
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
              },
        async: false,
        success: function (res) {
           
            output=res;



        },
        error: function () {
            alert("error");
        }
    });
    
    return output;
}

function getZipCode() {

    var result=null;
     $.ajax({
         type: 'POST',
         url: 'https://services.bookashuttle.net/api/Company/GetCompanyProfile?companyId=1&commandType=SINGLE',
         data: {
             key: true 
         },
         async: false,
         success: function (res) {
            result=res;
 
 
},
 
//params.append('age', age);
//const queryString = params.toString();
    
         error: function () {
             alert("error");
         }
     });
     
     return result;
 }


 function getParties() {
    var output=null;
     $.ajax({
         type: 'POST',
         url: 'https://services.bookashuttle.net/api/GoogleMaps/GetLatLangParty?companyId=1',
         data: {
             key: true 
         },
         async: false,
         success: function (res) {
            
             output=res;
 
 
 
         },
         error: function () {
             alert("error");
         }
     });
     
     return output;
 }
 



$(document).ready(function(){
    
    $( "#rotateCar,#driverTracking" ).on( "click", function() {
        Refresh();
      } );
})