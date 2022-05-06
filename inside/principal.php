<?php
session_start();
require "../back/functions.php";
//Save data session into database
if (isset($_GET['user'])) {
    $GLOBALS['user'] = $_GET['user'];
    //Call the method
    saveSession($GLOBALS['user']);
}
$exp = getExpUser(getUsername(session_id()));
$title = getTitleByExp(getUsername(session_id()), $exp);
$userName=getUserName(session_id());
$url=getUserPicPath();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/style.header.css">
    <link rel="stylesheet" href="../assets/css/style.inside.principal.css">
    <title>Memeologia | Registro</title>
    <style>
    main {
        margin-top: 60px;
        border-top: 2px solid black;
        background-color: #01111e;
        margin-bottom: 0px;
        color: white;
    }


    @media (min-width: 860px) {
        main{
            display: grid;
            grid-template-columns: 35% 1fr;
            grid-template-rows: auto auto auto auto auto;
            grid-template-areas: 
            'pic follow' 
            'name posts'
            'data posts'
            'description posts'
            'reset posts'
            ;


        }


    }

    @media (min-width: 1460px) {
        main{
            display: grid;
            grid-template-columns: 30% 1fr;
            grid-template-rows: auto auto auto auto auto;
            grid-template-areas: 
            'pic follow' 
            'name posts'
            'data posts'
            'description posts'
            'reset posts'
            ;


        }


    }

    @media (min-width: 1860px) {
        main{
            display: grid;
            grid-template-columns: 25% 1fr;
            grid-template-rows: auto auto auto auto auto;
            grid-template-areas: 
            'pic follow' 
            'name posts'
            'data posts'
            'description posts'
            'reset posts'
            ;


        }


    }
    </style>
</head>

<body>
    <header>
        <button class="menuB" id="menuBoton" onclick="toggle()" value="false"><img src="../assets/icons/menu-dia.png"
                alt=""></button>
        <div id="nav-links">
            <a href="#" id="1">Perfil</a>
            <a href="test.php" id="2">Tests</a>
            <a href="nosotros.php" id="3">Ranking Global</a>
            <a href="config.php" id="4">Configuración</a>
            <a href="../back/close-session.php" id="5">Cerrar sesión</a>
            <a href="#" onclick="closeMenu()" id="last"><img src="../assets/icons/flechaArriba.png" alt="" width="30px">
            </a>
        </div>
        <div id="nav-links-desktop">
            <a href="#" id="1">Perfil</a>
            <a href="test.php" id="2">Tests</a>
            <a href="nosotros.php" id="3">Ranking Global</a>
            <a href="config.php" id="4">Configuración</a>
            <a href="../back/close-session.php" id="4"><img src="../assets/icons/sesion-close.png" width="30px"></a>
            </a>
        </div>
    </header>
    <main>
        <img src="../assets/icons/todopoderosorey.png" width="50px" id="corona">
        <div class="pic">
            <img src="<?php echo $url; ?>" width="200px" height="200px">
        </div>
        <div class="name">
            <span>[<?php echo getUsername(session_id()); ?>]</span>
        </div>
        <div class="follow">
            <div class="followers">
                <p>3 <br> Seguidores</p>
            </div>
            <div class="likes">
                <p>56 <br> Me gustas</p>
            </div>
            <div class="following">
                <p>54 <br>Siguiendo</p>
            </div>
        </div>
        <div class="data">
            <div class="exp">
                <p>Experiencia <br> <span class="exp"><?php echo $exp; ?></span></p>
            </div>
            <div class="titulo">
                <p>Título <br> <?php echo $title; ?></p>
            </div>
        </div>
        <div class="description">
            <h3 class="title">Estado </h3>
            <p class="text"> <?php echo getStatus(); ?></p>
            <a href="#" id="troll-status">¡Cambiame!</a>
        </div>
        <div class="reset">
            <a href="config.php">Modificar mi perfil</a>
        </div>

        <!-- POSTS DE LOS USUARIOS -->
        <div class="posts">
            here the post
        </div>


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
                main.style.marginTop = "60px";
            }, 800);
        }
        </script>
    </main>
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