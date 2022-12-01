$(document).ready(function(){
    $("#mapa1").goMap({
        latitude: -10.415827848929817,
        longitude: -75.35532574295418,
        zoom: 5,
        maptype: "TERRAIN",
        scaleControl: true
        
    });

    $.goMap.createMarker({

        latitude: -10.415827848929817,
        longitude: -75.35532574295418,
        title: "Perú",
        html: {
            content:"<h3>Latino América - Principalmente Perú</h3>",
            popup: true

        }
    });

})
