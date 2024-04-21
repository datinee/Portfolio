// The following example creates five accessible and
// focusable markers.
function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 5.5,
        center: { lat: 32.000027, lng: 2.9999825 },
    });
    // Set LatLng and title text for the markers. The first marker (Boynton Pass)
    // receives the initial focus when tab is pressed. Use arrow keys to
    // move between markers; press tab again to cycle through the map controls.
    const tourStops = [
        [{ lat: 35.0794074, lng: 1.069627 }, "FRENDA"],
        [{ lat: 36.2580277, lng: 4.8243593 }, "TESSAMEURT"],
        [{ lat: 34.6246281, lng: -1.5551957 }, "BENI-SNOUS"],
        [{ lat: 33.215441, lng: 7.1553214 }, "EL-OUED"],
        [{ lat: 36.8982165, lng: 7.7549272 }, "ANNABA"],
        [{ lat: 30.9980145, lng: 6.7664536 }, "OUARGLA"],
        [{ lat: 35.93333435058594, lng: 0.09027779847383499 }, "MOSTAGANEM"],
        [{ lat: 35.6093146, lng: -0.7333115 }, "MISSERGHINE"],
        [{ lat: 26.4888155, lng: -1.3582442 }, "ADRAR"],
        [{ lat: 35.4, lng: 8.116667 }, "TEBESSA"],
        [{ lat: 35.6976541, lng: -0.6337376 }, "ORAN"],
        [{ lat: 35.0962252, lng: -1.8562218 }, "GHAZAOUET"],
        [{ lat: 34.8884062, lng: -1.3180042 }, "TLEMCEN"],
        [{ lat: 34.430385, lng: 5.061176 }, "OULED DJELLAL"],
        [{ lat: 36.1969027, lng: 5.4150871 }, "SETIF"],
        [{ lat: 35.083824, lng: -2.197410 }, "PORSAY"],

    ];
    // Create an info window to share between markers.
    const infoWindow = new google.maps.InfoWindow();

    // Create the markers.
    tourStops.forEach(([position, title], i) => {
        const marker = new google.maps.Marker({
            position,
            map,
            title: `${title}`,
            optimized: false,
        });

        // Add a click listener for each marker, and set up the info window.
        marker.addListener("click", () => {
            infoWindow.close();
            infoWindow.setContent(marker.getTitle());
            infoWindow.open(marker.getMap(), marker);
        });
    });
}

window.initMap = initMap;