$(document).ready(function(){
    $("#mapa6").goMap({
        latitude: 3.379726207338836,
        longitude: -73.63940355710236,
        zoom: 5,
        maptype: "TERRAIN",
        scaleControl: true
        
    });

    $.goMap.createMarker({

        latitude: 3.379726207338836,
        longitude: -73.63940355710236,
        title: "Perú",
        html: {
            content:"<h3>Colombia - Zona Andina Latinoamericana</h3>",
            popup: true

        }
    });

})

