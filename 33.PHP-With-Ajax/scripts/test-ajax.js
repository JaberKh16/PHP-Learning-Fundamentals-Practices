$(document).ready(function() {
    
    $("#openCameraButton").on('click', function(){
        const latitude = 0.0;
        const longitude = 0.0;
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position)
            {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;
                const l = $("latitude");
                // console.log(l);
                console.log(latitude);
                console.log(longitude);
                        // let locationElement = document.getElementById("locationInfo");
                        // locationElement.innerHTML = "Latitude: " + lat + ", Longitude: " + lon;
                        // console.log(locationElement.outerHTML); // prints HTML tag to console
                const locationInfo = {
                    'latitude': latitude,
                    'longitude': longitude
                }

                $.ajax({
                    url: "./operational-functions/test-ajax.php",
                    type: "POST",
                    data: {
                        'locationInfo': locationInfo
                    },
                    success: function(response){
                        console.log(response)
                    }
                })

            });
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    });
   
        
});

