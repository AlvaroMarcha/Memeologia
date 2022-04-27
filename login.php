<?php include "back/functions.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/style.header.css">
    <link rel="stylesheet" href="assets/css/style.forms.css">
    <title>Inicio de Sesión</title>

    <style>
    main {
        margin-bottom: 0px;

    }
    </style>
</head>

<body>
    <header>
        <button class="menuB" id="menuBoton" onclick="toggle()" value="false"><img src="assets/icons/menu-dia.png"
                alt=""></button>
        <div id="nav-links">
            <a href="index.php" id="1">Memeologia</a>
            <a href="usuarios.php" id="2">Usuarios</a>
            <a href="nosotros.php" id="3">Nosotros</a>
            <a href="ideas.php" id="4">Contacto de Ideas</a>
            <a href="#" onclick="closeMenu()" id="last"><img src="assets/icons/flechaArriba.png" alt="" width="30px">
            </a>
        </div>
        <div id="nav-links-desktop">
            <a href="indexp.php" id="1">Memeologia</a>
            <a href="usuarios.php" id="2">Usuarios</a>
            <a href="nosotros.php" id="3">Nosotros</a>
            <a href="ideas.php" id="4">Contacto de Ideas</a>
            </a>
        </div>
    </header>
    <main>
        <h2 class="title">Iniciar Sesión</h2>
        <div class="form">
            <form action="login.php" method="POST">
                <input type="text" name="user" placeholder="Usuario" autocomplete="off"><br>
                <input type="password" name="pass" placeholder="Contraseña" autocomplete="off"><br>
                <div class="button">
                    <button type="submit" name="enviar">Entrar</button>
                    <div class="status" id="form">
                    <?php
                    $tag="";
                    if (isset($_POST['enviar'])) {
                        //Recuperamos las variables
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        if (!empty($user) && !empty($pass)) {
                            //Ahora hacemos la comparacion
                            if (existLogin($user, $pass)) {
                                // header("location: memeologia.com/inside/principal.php?user=$user");
                                header("location: inside/principal.php?user=$user");
                                echo "Esta correcto aqui - Es tema de la redireccion";
                            } else {
                                $status = "Las credenciales son incorrectas";
                                $tag="<p class='incorrectas'>$status</p>";
                            }
                        } else {
                            $status = "Rellena los campos";
                            $tag="<p class='rellena'>$status</p>";
                        }
                    } else {
                        $status = "Introduce tus credenciales";
                        $tag="<p class='introduce'>$status</p>";
                    }
                    ?>
                        <?php  echo $tag; ?>
                    </div>
            </form>
        </div>
    </main>
    <footer>
        <div class="social">
            <div class="insta">
                <a href=""><img src="assets/icons/instagram-icon.png" alt="" width="50px"></a><br>
                <span>alan.vicent8494</span>
            </div>
            <div class="twitter">
                <a href=""><img src="assets/icons/twitter-icon.png" alt="" width="50px"></a><br>
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
    <script src="js/menu.js"></script>
</body>

</html>