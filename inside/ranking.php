<?php
session_start();
require "../back/functions.php";

$name=getUserName(session_id());

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/style.header.css">
    <link rel="stylesheet" href="../assets/css/style.ranking.css">
    <title>Memeologia | Registro</title>
</head>

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
    <main class="container">
        <h1>Ranking Global</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th class="th1">Puesto</th>
                        <th class="th2">Usuario</th>
                        <th class="th3">Experiencia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo  getRankTable();?>
                </tbody>
            </table>
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