// Función Menú //

document.getElementById("icono-menu").addEventListener("click",mostrar_menu);

function mostrar_menu() {

    document.getElementById("move-contenido").classList.toggle('move-contenedor-principal');
    document.getElementById("mostrar-menu").classList.toggle('mostrar-menu-lateral');
}


//* Formulario*//

function validar() {
    let recetaForm;
    let tiempoForm;
    let ingredientesForm;
    let instruccionesForm;

    recetaForm =document.getElementById("receta").value;
    tiempoForm =document.getElementById("tiempo").value;
    ingredientesForm =document.getElementById("ingredientes").value;
    instruccionesForm =document.getElementById("instrucciones").value;

    
    
    if(recetaForm ===""|| tiempoForm ===""|| ingredientesForm ===""|| instruccionesForm ===""){
        alert ("Campos obligatorios");
        return false;
    }
    else if(recetaForm.length < 2) {
        alert ("El nombre de la receta es muy corto");
        return false;
    }

    else if(tiemmpoForm.length > 10) {
        alert ("Es mucho tiempo");
        return false;
    }
    else if(ingredientesForm.length < 2) {
        alert ("Muy pocos ingredientes");
        return false;
    }
    else if(instruccionesForm.length < 10) {
        alert ("Muy pocas instruccioness");
        return false;
    }
    }
    