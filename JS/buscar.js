//--------------Funcionalidad Menu-------------------//
document.getElementById("icono-menu").addEventListener("click",mostrar_menu);

function mostrar_menu() {

    document.getElementById("move-contenido").classList.toggle('move-contenedor-principal');
    document.getElementById("mostrar-menu").classList.toggle('mostrar-menu-lateral');
}



//------------Funcionalidad buscador--------------------//



let barra_busqueda = document.getElementById('barra-busqueda');
let cover_busqueda = document.getElementById('cover-busqueda');
let input_busqueda = document.getElementById('input-busqueda');
let caja_busqueda = document.getElementById('caja-busqueda');

input_busqueda.addEventListener("click", escribir_buscador);
document.getElementById("recetas").addEventListener("click", ocultar_buscador)


function escribir_buscador() {
    caja_busqueda.style.display = "block";
}

function ocultar_buscador() {
    caja_busqueda.style.display = "none";
}

input_busqueda.addEventListener("keyup", filtrado_buscador);

function filtrado_buscador() {
    let filtro = input_busqueda.value.toUpperCase();
    let li = caja_busqueda.getElementsByTagName("li");

    for (i = 0; i < li.length; i++) {

        let a = li[i].getElementsByTagName("a")[0];
        let valor_texto = a.textContent || a.innerText;

        if(valor_texto.toUpperCase().indexOf(filtro) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}