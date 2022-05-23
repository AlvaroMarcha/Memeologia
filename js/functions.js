// Documento JavaScript

// Funciones para la web JAVASCRIPT
//Variables 
var popPass=document.getElementById("popPass");
var popEmail=document.getElementById("popEmail");
var statusTroll=document.getElementById("status-troll");
var botonTroll=document.getElementById("troll-status");

var popBase=document.getElementById("base-popup");
var contentPop=document.getElementById("content-pop")
var contentForm=document.getElementById("content-form");


//funcion para abrir el pop-up de cambio de contraseña
function openPopPass(){
    popPass.style.height="130vh";
    popPass.style.opacity="1";
    popPass.style.zIndex="10";


}

//funcion para cerrar el pop-up de cambio de contraseña
function closePopPass(){
    popPass.style.opacity="0";
    popPass.style.zIndex="-1";


}

// EMAIL
//funcion para abrir el pop-up de cambio de email
function openPopEmail(){
    popEmail.style.height="130vh";
    popEmail.style.opacity="1";
    popEmail.style.zIndex="10";


}

//funcion para cerrar el pop-up de cambio de email
function closePopEmail(){
    popEmail.style.opacity="0";
    popEmail.style.zIndex="-1";


}

// ESTADO
//functiones para el cambio de los estados "Eres lo que lees, puto el que lo lea".
function troll(){
    statusTroll.innerHTML="Esto es un texto troll :) . <br>";
    statusTroll.style.color="rgb(252, 194, 3)";
    statusTroll.style.fontWeight="bolder";
    statusTroll.style.fontSize="30px";

    setTimeout(function(){
        popBase.style.zIndex="10";
        popBase.style.opacity="1";


        setTimeout(function () {
            contentPop.style.zIndex="-1";
            contentPop.style.opacity="0";

            contentForm.style.opacity="1"

            contentPop.style.display="none";

            

        }, 4150);


    }, 2100);

    
}
