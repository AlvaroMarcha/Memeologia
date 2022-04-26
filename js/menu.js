// Documento JavaScript

var open = document.getElementById("menuBoton").value;
//Recuperamos las clases que se veran afectadas por los estilos del menu en variables
var header = document.getElementsByTagName("header")[0];
var menu = document.getElementById("nav-links");
var main = document.getElementsByTagName("main")[0];
var height = header.clientHeight;
var heightLinks = menu.clientHeight;
var uno = document.getElementById("1");
var dos = document.getElementById("2");
var tres = document.getElementById("3");
var cuatro = document.getElementById("4");
var last = document.getElementById("last");


//Funciones para el menu responsive de movil
function openMenu() {

    menu.style.top = (height - 3) + "px";
    main.style.marginTop = heightLinks + "px";

    setTimeout(function () {
        setTimeout(function () { uno.style.opacity = 1 }, 300);
        setTimeout(function () { dos.style.opacity = 1 }, 400);
        setTimeout(function () { tres.style.opacity = 1 }, 500);
        setTimeout(function () { cuatro.style.opacity = 1 }, 600);
        setTimeout(function () { last.style.opacity = 1 }, 700);
    }, 300);

}

function closeMenu() {
    setTimeout(function () { uno.style.opacity = 0 }, 700);
    setTimeout(function () { dos.style.opacity = 0 }, 600);
    setTimeout(function () { tres.style.opacity = 0 }, 500);
    setTimeout(function () { cuatro.style.opacity = 0 }, 400);
    setTimeout(function () { last.style.opacity = 0 }, 300);

    setTimeout(function () {
        menu.style.top = "-100%";
        menu.style.transition = "1s";
        menu.style.opacity = "1";
        main.style.marginTop = "0px";
    }, 800);



}

function toggle() {
    console.log("Estado: " + open);
    if (!open) {
        closeMenu();
        open = true;

    } else {
        openMenu();
        open = false;

    }

}

