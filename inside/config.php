<?php
session_start();
require "../back/functions.php";

$name=getUserName(session_id());
$email=getUserEmail(session_id(), $name);
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
    <link rel="stylesheet" href="../assets/css/style.config.css">
    <title>Memeologia | Registro</title>
    <style>
    main {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows:auto auto auto auto;
        grid-template-areas:
            'profile'
            'name'
            'password'
            'email'
        ;

        height: max-content;
        /* background-color:red; */
        margin-top: 60px;
        border-top: 2px solid black;
        margin-bottom: 0px;
        background-color: #01111e;
        color: white;
    }


    /* @media (min-width: 860px) {
        main {
            display: grid;

            margin-top: 60px;
            border-top: 2px solid black;
            background-color: #01111e;
            margin-bottom: 0px;
            color: white;
        }

    } */
    </style>
</head>

<body>
    <header>
        <button class="menuB" id="menuBoton" onclick="toggle()" value="false"><img src="../assets/icons/menu-dia.png"
                alt=""></button>
        <div id="nav-links">
            <a href="principal.php" id="1">Perfil</a>
            <a href="test.php" id="2">Tests</a>
            <a href="nosotros.php" id="3">Ranking Global</a>
            <a href="config.php" id="4">Configuración</a>
            <a href="../back/close-session.php" id="5">Cerrar sesión</a>
            <a href="#" onclick="closeMenu()" id="last"><img src="../assets/icons/flechaArriba.png" alt="" width="30px">
            </a>
        </div>
        <div id="nav-links-desktop">
            <a href="principal.php" id="1">Perfil</a>
            <a href="test.php" id="2">Tests</a>
            <a href="nosotros.php" id="3">Ranking Global</a>
            <a href="config.php" id="4">Configuración</a>
            <a href="../back/close-session.php" id="4"><img src="../assets/icons/sesion-close.png" width="30px"></a>
            </a>
        </div>
    </header>
    <main>
        <div class="profile">
            <img src="<?php echo $url; ?>" width="200px" height="200px">
            <div class="toUploadPicProfile">
                <form action="" class="form1">
                    <!-- Upload new image -->
                    <label for="file" id="label">
                        <span><img src="../assets/icons/uploadimg.png"><p>Subir imagen</p></span>
                    </label><br>
                    <input type="file" name="imagen" id="file">
                    <input type="submit" value="Establecer" class="submit">
                </form>
            </div>
        </div>
        <div class="name">
            <div class="toChangeName">
                <form action="">
                    <!-- Change name -->
                    <input type="text" name="newName" id="newName" value="<?php echo $name; ?>">
                    <input type="submit" value="Establecer">
                </form>
            </div>
        </div>
        <div class="password">
            <div class="toChangePass">
                <form action="">
                    <!-- Change password -->
                    <input type="password" name="newPass" id="newPass" value="***********">
                    <input type="submit" value="Establecer">
                </form>
            </div>
        </div>
        <div class="email">
            <div class="toChangeEmail">
                <form action="">
                    <!-- Change name -->
                    <input type="email" name="newEmail" id="newEmail" value="<?php echo $email; ?>">
                    <input type="submit" value="Establecer">
                </form>
            </div>
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