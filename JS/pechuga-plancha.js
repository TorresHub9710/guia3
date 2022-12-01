$(document).ready(function(){
    $("#mapa3").goMap({
        latitude: 34.77977926519933,
        longitude: 103.7169585415255,
        zoom: 5,
        maptype: "TERRAIN",
        scaleControl: true
        
    });

    $.goMap.createMarker({

        latitude: 34.77977926519933,
        longitude: 103.7169585415255,
        title: "China",
        html: {
            content:"<h3>China - Sudeste Asiático</h3>",
            popup: true

        }
    });

})
