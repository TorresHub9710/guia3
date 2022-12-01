//--------------Funcionalidad Menu-------------------//
document.getElementById("icono-menu").addEventListener("click",mostrar_menu);

function mostrar_menu() {

    document.getElementById("move-contenido").classList.toggle('move-contenedor-principal');
    document.getElementById("mostrar-menu").classList.toggle('mostrar-menu-lateral');
}
