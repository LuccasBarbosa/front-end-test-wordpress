"use strict";

        function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 20,
            center: {
            lat: -23.4975894,
            lng: -46.8656597
            }
        });
        const geocoder = new google.maps.Geocoder();
        document.getElementById("submit").addEventListener("click", () => {
            geocodeAddress(geocoder, map);
        });
        }

        function geocodeAddress(geocoder, resultsMap) {
        const address = document.getElementById("address").value;
        geocoder.geocode(
            {
            address: address
            },
            (results, status) => {
            if (status === "OK") {
                resultsMap.setCenter(results[0].geometry.location);
                new google.maps.Marker({
                map: resultsMap,
                position: results[0].geometry.location
                });
            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }
            }
        );
        }