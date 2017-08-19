//contact google map

var myLatLng = {lat: 19.118283, lng: 72.857271};

var  Latitude = 19.118283,
    Longitude = 72.857271; // These are the values for your desired longitude and latitude

if ($("#googleMap").length > 0) {
    var myCenter = new google.maps.LatLng(myLatLng);

    var map = new google.maps.Map(document.getElementById("googleMap"), {
        center: myCenter,
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        rotateControl: false,
        fullscreenControl: false,
        styles: [{
            "featureType": "all",

        }]
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Futuready Media'
      });


}
