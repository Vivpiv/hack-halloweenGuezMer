// Fonction de callback en cas de succès

function geoSucess(position){
    
    let lat = position.coords.latitude;
    let lon = position.coords.longitude;

    let macarte = null;

    var villes = {
        "Paris": { "lat": 47.893211, "lon": 1.8922868 },
        "Brest": { "lat": 47.893211, "lon": 1.8922868 },
        "Quimper": { "lat": 48.000, "lon": -4.100 },
        "Bayonne": { "lat": 43.500, "lon": -1.467 }
    };

    function initMap() {
        // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
        macarte = L.map('map').setView([lat, lon], 11);
        // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            // Il est toujours bien de laisser le lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(macarte);

        var marker = L.marker([lat, lon]).addTo(macarte);
        for (ville in villes) {
            var marker = L.marker([villes[ville].lat, villes[ville].lon]).addTo(macarte);
        }
    }

    window.onload = function(){
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();
    };
}


function geoFail() { // Ceci s'exécutera si l'utilisateur refuse la géolocalisation
    console.log("refus");
}

if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(geoSucess, geoFail);
    //location.reload();
}






// function surveillePosition(position) {
//     var infopos = "Position déterminée :\n";
//     infopos += "Latitude : "+position.coords.latitude +"\n";
//     infopos += "Longitude: "+position.coords.longitude+"\n";
//     infopos += "Altitude : "+position.coords.altitude +"\n";
//     infopos += "Vitesse  : "+position.coords.speed +"\n";
//     document.getElementById("infoposition").innerHTML = infopos;
//
//     latlng = L.map.Latlng(position.coords.latitude, position.coords.longitude);
//
//
//
// }
//
// // On déclare la variable survId afin de pouvoir par la suite annuler le suivi de la position
// var survId = navigator.geolocation.watchPosition(surveillePosition);
//
// navigator.geolocation.clearWatch(survId);






// On initialise la latitude et la longitude de Paris (centre de la carte)



// // Fonction d'initialisation de la carte
// function initMap() {
//     // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
//     macarte = L.map('map').setView([lat, lon], 11);
//     // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
//     L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
//         // Il est toujours bien de laisser le lien vers la source des données
//         attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
//         minZoom: 1,
//         maxZoom: 20
//     }).addTo(macarte);
//
//     var marker = L.marker([latlng]).addTo(map);
//     for (ville in villes) {
//         var marker = L.marker([villes[ville].lat, villes[ville].lon]).addTo(macarte);
//     }
// }




