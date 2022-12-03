$(document).ready(function(){
    $("#mapa5").goMap({
        latitude: 39.527940388587105,
        longitude: -3.4870109732448746,
        zoom: 5,
        maptype: "TERRAIN",
        scaleControl: true
        
    });

    $.goMap.createMarker({

        latitude: 39.527940388587105,
        longitude: -3.4870109732448746,
        title: "España",
        html: {
            content:"<h3>España - Hereda Latinoamérica</h3>",
            popup: true

        }
    });

})
