<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('CSS/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('Assets/fontawesome/css/all.min.css') }}">
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key="></script> --}}

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <title>BURGER FABRIC</title>
</head>
<body>
    @yield('content')

    {{-- <script>
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;

                    // Afficher la position sur Google Maps
                    const map = new google.maps.Map(document.getElementById("map"), {
                        center: { lat: latitude, lng: longitude },
                        zoom: 15,
                    });

                    new google.maps.Marker({
                        position: { lat: latitude, lng: longitude },
                        map: map,
                        title: "Votre position",
                    });
                },
                (error) => {
                    console.error("Erreur de géolocalisation :", error.message);
                }
            );
        } else {
            console.log("La géolocalisation n'est pas supportée par ce navigateur.");
        }
    </script> --}}

    <script>
        // Fonction pour initialiser la carte
        function initMap(latitude, longitude) {
            // Initialiser la carte
            const map = L.map('map').setView([latitude, longitude], 15); // Zoom level 15

            // Ajouter une couche de tuiles OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Ajouter un marqueur à la position de l'utilisateur
            L.marker([latitude, longitude])
                .addTo(map)
                .bindPopup('Votre Position')
                .openPopup();
        }

        // Vérifier si la géolocalisation est supportée
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;
                    console.log(`Latitude: ${latitude}, Longitude: ${longitude}`);

                    // Afficher la carte avec OpenStreetMap
                    initMap(latitude, longitude);
                },
                (error) => {
                    console.error("Erreur de géolocalisation :", error.message);
                }
            );
        } else {
            console.log("La géolocalisation n'est pas supportée par ce navigateur.");
        }
    </script>
</body>
</html>