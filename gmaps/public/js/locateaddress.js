InitMap();

function InitMap() {

        var geocoder = new google.maps.Geocoder();

        // var data={
        // "latitude":28.5406838,
        // "longitude":77.2829929,
        // "LocationAddress":"Road No.36, Jubilee Hills, near Bank of Baroda, Jubilee Hills, Hyderabad, Telangana 500038, India"
        

        // };
        
var resp=getLocationsById();

// console.log(resp.data[0].address);


// mapHeadCont = document.getElementById("mapHeadCont").innerHTML;

// console.log(mapHeadCont);
       

        geocoder.geocode({ 'address':resp.data[0].address }, function (results, status) {
           
         
            if (status == google.maps.GeocoderStatus.OK) {
                latitude = results[0].geometry.location.lat();
                longitude = results[0].geometry.location.lng();
                var mapOptions = {
                    center: { lat: latitude, lng: longitude },
                    zoom: 14,
                    maxZoom: 16.5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    clickableIcons: false
                };

                map = new google.maps.Map(document.getElementById("dvCanvas"), mapOptions);
                var marker = new google.maps.Marker
                    ({
                        position: { lat: latitude, lng: longitude },
                        map: map,
                        title: resp.data[0].address,
                        // icon: icon,
                        visible: true
                    });
                marker.setMap(map);
                attachSecretMessage(marker, resp.data)        
            } else {
                var myLatlng = new google.maps.LatLng(26.085916, -80.173402);

                var mapOptions = {
                    center: myLatlng,
                    zoom: 14,
                    maxZoom: 16.5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    clickableIcons: false
                };

                map = new google.maps.Map(document.getElementById("dvCanvas"), mapOptions);
            }
        });

}



function attachSecretMessage(marker, data) {

    var resp=getLocationsById();


    var contentString;
    if (resp.data[0].address != null) {
        contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<div id="bodyContent">' +
            '<p><b>' + resp.data[0].address + '</b></p>' +

            '</div>' +
            '</div>';

    }
    else {
        contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<div id="bodyContent">' +
            '<p><b>' + resp.data[0].address + '</b></p>' +
            '</div>' +
            '</div>';
    }

    google.maps.event.addListener(marker, 'click', function () {

        var url = 'https://www.google.com/maps/dir/?api=1&destination=' + resp.data[0].address;
        window.open(url, '_blank');

    });
    google.maps.event.addDomListener(marker, 'mouseover', function () {
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        infowindow.open(map, marker);
    });
}

function getLocationsById() {
  
    var output=null;

     $.ajax({
         type: 'GET',
         url: 'https://services.bookashuttle.net/api/Location/GetLocations?companyId=1&status=1&locationId=150&commandType=GETLOCATIONSBYID',
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

    
    
    var resp=getLocationsById();
    var mapCont = "<label>Location Name: "+resp.data[0].location+"</label></br>"+
    "<label>Address : "+resp.data[0].address+"</label></br>"+
    "<label>Phone No : "+resp.data[0].phone+"</label></br>"+
    "<label>Location Url : "+resp.data[0].uri+"</label></br>"+
    "<label>Notes : "+resp.data[0].notes+"</label></br>";
    

    //alert(resp.data[0].address);
    $("#mapHeadCont").html(mapCont)

// mapHeadCont = document.getElementById("mapHeadCont").innerHTML;

// console.log(mapHeadCont);
    
})