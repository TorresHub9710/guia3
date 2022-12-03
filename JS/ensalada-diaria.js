$(document).ready(function(){
    $("#mapa4").goMap({
        latitude: 32.267837236831284,
        longitude: 54.42023092224928,
        zoom: 5,
        maptype: "TERRAIN",
        scaleControl: true
        
    });

    $.goMap.createMarker({

        latitude: 32.267837236831284,
        longitude: 54.42023092224928,
        title: "Irán",
        html: {
            content:"<h3>Irán antes Persia</h3>",
            popup: true

        }
    });

})
