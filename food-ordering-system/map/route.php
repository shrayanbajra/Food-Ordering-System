<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Show Route</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style1.css' />

</head>

<body>
    <div id='map-canvas'></div>
    <script>

        function initMap() {
            var pointA = new google.maps.LatLng(27.698653, 85.296749),
                pointB = new google.maps.LatLng(27.6782,85.3808),
                myOptions = {
                    zoom: 15,
                    center: pointA
                },
                map = new google.maps.Map(document.getElementById('map-canvas'), myOptions),
                // Instantiate a directions service.
                directionsService = new google.maps.DirectionsService
            directionsDisplay = new google.maps.DirectionsRenderer({
                map: map
            }),
                

            // get route from A to B
            calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);

        }



        function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
            directionsService.route({
                origin: pointA,
                destination: pointB,
                avoidTolls: true,
                avoidHighways: false,
                travelMode: google.maps.TravelMode.DRIVING
            }, function (response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }

    </script>

    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDShSYssqKYoYnKO-m6pK2ERngP9P7rUdU&callback=initMap' async
        defer></script>

</body>

</html>