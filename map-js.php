<script async defer type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBlMlA9GhLjuLYtuz4xhqI_uQvibPJwVnI&sensor=false&libraries=places"></script>
<script type="text/javascript">
         $(window).load(function () {
    $('.chkbox').click(function () {
        $(':checkbox').prop('checked', false);
        $('#' + $(this).prop('id')).prop('checked', true);
		
        search_types(map.getCenter());
    });

    var markersArray = [];
    var marker;
    var geocoder = new google.maps.Geocoder();
    var pyrmont = new google.maps.LatLng(28.424922, 77.489149);
    var map;
    var infowindow;
    map_initialize(); // load map
    function map_initialize() {
        map = new google.maps.Map(document.getElementById("map"), {
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            center: pyrmont,
            zoom: 13
        });

        infowindow = new google.maps.InfoWindow();
        //document.getElementById('directionsPanel').innerHTML='';
        search_types();
    }
    function createMarker(place, icon) {
        var marker = new google.maps.Marker({
            map: map,
            position: place.geometry.location,
            icon: icon,
            visible: true

        });

        markersArray.push(marker);
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.setContent("<b>Name:</b>" + place.name + "<br><b>Address:</b>" + place.vicinity);
            infowindow.open(map, this);
        });

    }
    var source = "";
    var dest = '';

    function search_types(latLng) {
        clearOverlays();

        if (!latLng) {
            var latLng = pyrmont;
        }
        var type = $('.chkbox:checked').val();
        var icon = "images/map_icon/" + type + ".png";


        var request = {
            location: latLng,
            radius: 2000,
            types: [type] //e.g. school, restaurant,bank,bar,city_hall,gym,night_club,park,zoo
        };

        var service = new google.maps.places.PlacesService(map);
        service.search(request, function (results, status) {
            map.setZoom(13);
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                    results[i].html_attributions = '';
                    createMarker(results[i], icon);
                }
            }
        });

    }


    // Deletes all markers in the array by removing references to them
    function clearOverlays() {
        if (markersArray) {
            for (i in markersArray) {
                markersArray[i].setVisible(false);
            }
            //markersArray.length = 0;
        }
    }

    function clearMarkers() {
        $('#show_btn').show();
        $('#hide_btn').hide();
        clearOverlays();
    }
    function showMarkers() {
        $('#show_btn').hide();
        $('#hide_btn').show();
        if (markersArray) {
            for (i in markersArray) {
                markersArray[i].setVisible(true);
            }

        }
    }

    //function showMap(){
    var imageUrl = 'http://chart.apis.google.com/chart?cht=mm&chs=24x32&chco=FFFFFF,&ext=.png';
    var markerImage = new google.maps.MarkerImage(imageUrl, new google.maps.Size(24, 32));
    var input_addr = $('#address').val();
    geocoder.geocode({address: input_addr}, function (results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            var latitude = $('#lat').val();
            var longitude =$('#long').val();
            var latlng = new google.maps.LatLng(latitude, longitude);
            if (results[0]) {
                map.setZoom(13);
                map.setCenter(latlng);
                marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    icon: markerImage,
                    draggable: true

                });
                //$('#btn').hide();
                //$('#latitude,#longitude').show();
				var add = $('#address').val();
                $('#address').val(results[0].formatted_address);
                $('#latitude').val(marker.getPosition().lat());
                $('#longitude').val(marker.getPosition().lng());
                 infowindow = new google.maps.InfoWindow({
        content: ("<div><img src='images/logo.jpg'></div><div>"+ add + "</div>")
    });
                infowindow.open(map, marker);
                search_types(marker.getPosition());
                google.maps.event.addListener(marker, 'click', function () {
					 infowindow = new google.maps.InfoWindow({
        content: ("<div><img src='images/logo.jpg'></div><div>"+ add + "</div>")
    });
                    infowindow.open(map, marker);

                });

                google.maps.event.addListener(marker, 'dragend', function () {
                    geocoder.geocode({'latLng': marker.getPosition()}, function (results, status) {
                        if (status === google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                //$('#btn').hide();
                                //$('#latitude,#longitude').show();
                                $('#address').val(results[0].formatted_address);
                                $('#latitude').val(marker.getPosition().lat());
                                $('#longitude').val(marker.getPosition().lng());
                            }
                            infowindow.setContent(results[0].formatted_address);
                            var centralLatLng = marker.getPosition();
                            search_types(centralLatLng);
                            infowindow.open(map, marker);
                        }
                    });
                });
            } else {
            }
        } else {
        }
    });
});

     
</script>