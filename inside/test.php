<?php
session_start();
require "../back/functions.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/style.header.css">
    <link rel="stylesheet" href="../assets/css/style.inside.test.css">
    <title>Memeologia | Tests</title>

    <style>
    main {
        margin-top: 0px;
        border-top: 2px solid black;
        background-color: #01111e;
        margin-bottom: 0px;
        color: white;
    }


    @media (min-width: 860px) {}
    </style>

<body>
    <header>
        <button class="menuB" id="menuBoton" onclick="toggle()" value="false"><img src="../assets/icons/menu-dia.png"
                alt=""></button>
        <div id="nav-links">
            <a href="principal.php" id="1">Perfil</a>
            <a href="#" id="2">Tests</a>
            <a href="ranking.php" id="3">Ranking Global</a>
            <a href="config.php" id="4">Configuración</a>
            <a href="../back/close-session.php" id="5">Cerrar sesión</a>
            <a href="#" onclick="closeMenu()" id="last"><img src="../assets/icons/flechaArriba.png" alt="" width="30px">
            </a>
        </div>
        <div id="nav-links-desktop">
            <a href="principal.php" id="1">Perfil</a>
            <a href="#" id="2">Tests</a>
            <a href="ranking.php" id="3">Ranking Global</a>
            <a href="config.php" id="4">Configuración</a>
            <a href="../back/close-session.php" id="4"><img src="../assets/icons/sesion-close.png" width="30px"></a>
            </a>
        </div>
    </header>
    <main>
        <div class="container">
            <h1>TESTS</h1>
            <div class="principal unop">
                <details>
                    <summary class="one">Principiantes</summary>
                    <div class="links links-one" id="one">
                        <a href="./tests/principiante-nivel-1.php">Nivel 1</a>
                        <a href="./tests/principiante-nivel-2.php">Nivel 2</a>
                        <a href="./tests/principiante-nivel-3.php">Nivel 3</a>
                        <a href="./tests/principiante-nivel-4.php">Nivel 4</a>
                    </div>

                </details>
            </div>
            <div class="principal">
                <details>
                    <summary class="two">Intermedio</summary>
                    <div class="links links-two" id="two">
                        <a href="">Nivel 1</a>
                        <a href="">Nivel 2</a>
                        <a href="">Nivel 4</a>
                        <a href="">Nivel 5</a> <!-- AQUI DESBLOQUEAS HUMOR NEGRO Y LGTBI -->
                        <a href="">Nivel 6</a>
                    </div>
                </details>
            </div>
            <div class="principal">
                <details>
                    <summary class="three">🌮mplicado</summary>
                    <div class="links links-three" id="three">
                        <a href="">Nivel 1</a>
                        <a href="">Nivel 2</a>
                        <a href="">Nivel 3</a>
                        <a href="">Nivel 4</a>
                    </div>

                </details>
            </div>
            <div class="principal lastp">
                <details>
                    <summary class="four">Master</summary>
                    <div class="links links-four" id="four">
                        <a href="">Nivel 1</a>
                        <a href="">Nivel 2</a>
                        <a href="">Nivel 3</a>
                        <a href="">Nivel 4</a>
                    </div>

                </details>
            </div>
            <hr>
            <div class="principal">
                <details>
                    <summary class="negroP"><span class="negro">Humor negro</span></summary>
                    <div class="links links-four">
                        <a href="">Nivel 1</a>
                        <a href="">Nivel 2</a>
                        <a href="">Nivel 3</a>
                        <a href="">Nivel 4</a>
                    </div>

                </details>
            </div>
            <div class="principal">
                <details>
                    <summary class="lgtb">
                        <span class="L">L</span>
                        <span class="G">G</span>
                        <span class="T">T</span>
                        <span class="B">B</span>
                        <span class="I">I</span>
                        <span class="Q">Q</span>
                        <span class="plus">+</span>
                    </summary>
                    <div class="links links-four">
                        <a href="">Nivel 1</a>
                        <a href="">Nivel 2</a>
                        <a href="">Nivel 3</a>
                        <a href="">Nivel 4</a>
                    </div>

                </details>
            </div>
        </div>


    </main>
    <script src="../js/menu.js"></script>
    <script>
    var cinco = getElementById("5");

    function closeMenu() {
        setTimeout(function() {
            uno.style.opacity = 0
        }, 700);
        setTimeout(function() {
            dos.style.opacity = 0
        }, 600);
        setTimeout(function() {
            tres.style.opacity = 0
        }, 500);
        setTimeout(function() {
            cuatro.style.opacity = 0
        }, 400);
        setTimeout(function() {
            cinco.style.opacity = 0
        }, 400);
        setTimeout(function() {
            last.style.opacity = 0
        }, 300);

        setTimeout(function() {
            menu.style.top = "-100%";
            menu.style.transition = "1s";
            menu.style.opacity = "1";
            main.style.marginTop = "0px";
        }, 800);
    }
    </script>

    <footer>
        <div class="social">
            <div class="insta">
                <a href=""><img src="../assets/icons/instagram-icon.png" alt="" width="50px"></a><br>
                <span>alan.vicent8494</span>
            </div>
            <div class="twitter">
                <a href=""><img src="../assets/icons/twitter-icon.png" alt="" width="50px"></a><br>
                <span>alan.vicent8494</span>
            </div>
        </div>
        <div class="colab">
            <p>Colaborar en la página <a href="#">Contáctame</a></p>
        </div>
        <div class="final-footer">
            Creado por alguien que sabe mucho de memes <br> MEMEOLOGIA 2022 &copy;
        </div>
    </footer>
</body>

</html>