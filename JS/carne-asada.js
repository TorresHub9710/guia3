$(document).ready(function(){
    $("#mapa2").goMap({
        latitude: -35.13430536116724,
        longitude: -65.21175103725705,
        zoom: 5,
        maptype: "TERRAIN",
        scaleControl: true
        
    });

    $.goMap.createMarker({

        latitude: -35.13430536116724,
        longitude: -65.21175103725705,
        title: "Argentina",
        html: {
            content:"<h3>Argentina-Asado Argenitno</h3>",
            popup: true

        }
    });

})
