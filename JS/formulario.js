// Función Menú //

document.getElementById("icono-menu").addEventListener("click",mostrar_menu);

function mostrar_menu() {

    document.getElementById("move-contenido").classList.toggle('move-contenedor-principal');
    document.getElementById("mostrar-menu").classList.toggle('mostrar-menu-lateral');
}


// Variables - Formualrio //
function captura(){
    var nombreReceta, tiempoReceta, listaIngredientes, instrucciones, videos, imagen;
    nombreReceta=document.getElementById("recetaName").value;
    tiempoReceta=document.getElementById("cookTime").value;
    listaIngredientes=document.getElementById("ingredients").value;
    instrucciones=document.getElementById("descripcion_E_Instruciones").value;
    videos=document.getElementById("video").value;
    imagen=document.getElementById("image").value;
    if (nombreReceta==""){
        alert("Por favor ingrese un nombre para la receta");
        document.getElementById("recetaName").focus();
    }else{
        if (listaIngredientes==""){
            alert("Por favor ingrese los ingredientes para esta receta");
            document.getElementById("ingredients").focus();
        }else{
            if (instrucciones==""){
                alert("Por favor ingrese las instrucciones para esta receta");
                document.getElementById("descripcion_E_Instruciones").focus();
            }else{
                document.getElementById("recetaName").value = "";
                document.getElementById("ingredients").value = "";
                document.getElementById("descripcion_E_Instruciones").value = "";
                document.getElementById("cookTime").value = "";
                document.getElementById("video").value = "";
                document.getElementById("image").value = "";
                document.getElementById("recetaName").focus();
            }
        }
    }
    console.log(nombreReceta, listaIngredientes, instrucciones);
}