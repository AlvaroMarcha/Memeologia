<?php include "back/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/style.header.css">
    <link rel="stylesheet" href="assets/css/style.forms.css">
    <title>Usuarios</title>
    <style>
    /* Banners */
    .banner {
        display: block;
        width: 100%;
        height: 80vh;
        background: linear-gradient(rgba(0, 47, 255, 0.486), rgba(0, 132, 255, 0.308)), url(assets/img/troll.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        /* background-attachment: fixed; */

    }

    .banner a {
        position: relative;
        top: 20px;
        background-color: red;

    }

    h3.superior {
        display: block;
        width: max-content;
        height: max-content;
        margin: auto;

        position: relative;
        top: 10px;


        font-size: 50px;
        color: rgb(243, 239, 0);
        text-shadow: 8px 10px rgba(255, 255, 255, 0.473);


    }

    </style>
</head>

<body>
    <header>
        <button class="menuB" id="menuBoton" onclick="toggle()" value="false"><img src="assets/icons/menu-dia.png"
                alt=""></button>
        <div id="nav-links">
            <a href="index.php" id="1">Memeologia</a>
            <a href="#" id="2">Usuarios</a>
            <a href="nosotros.php" id="3">Nosotros</a>
            <a href="ideas.php" id="4">Contacto de Ideas</a>
            <a href="#" onclick="closeMenu()" id="last"><img src="assets/icons/flechaArriba.png" alt="" width="30px">
            </a>
        </div>
        <div id="nav-links-desktop">
            <a href="index.php" id="1">Memeologia</a>
            <a href="#" id="2">Usuarios</a>
            <a href="nosotros.php" id="3">Nosotros</a>
            <a href="ideas.php" id="4">Contacto de Ideas</a>
            </a>
        </div>
    </header>
    <main>
        <h1 class="title">Usuarios</h1>
        <div class="banner">
            <h3 class="superior">¡Empieza!</h3>
        </div>
        <div  class="option">
            <div>
                <a href="">Iniciar Sesión</a>
            </div>
            <div>
                <a href="">Registrarse</a>
            </div>
        </div>
        <!-- <h2 class="title">Iniciar Sesión</h2>
        <div class="form">
            <form action="usuarios.php" method="POST">
                <div class="principal-form">
                    <div>
                        <input type="text" name="user" placeholder="Usuario..." autocomplete="off">
                    </div>
                    <div>
                        <input type="password" name="pass" placeholder="Contraseña..." autocomplete="off">
                    </div>
                </div>
                <div class="button">
                    <button type="submit" name="enviar">Entrar</button>
                </div>
                <div class="status" id="form">
                    <?php
                    if (isset($_POST['enviar'])) {
                        //Recuperamos las variables
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        if (!empty($user) && !empty($pass)) {
                            //Ahora hacemos la comparacion
                            if (existLogin($user, $pass)) {
                                // header("location: memeologia.com/inside/principal.php?user=$user");
                                header("location: ../inside/principal.php?user=$user");
                                echo "Esta correcto aqui - Es tema de la redireccion";
                            } else {
                                $status = "Las credenciales son incorrectas";
                            }
                        } else {
                            $status = "Rellena los campos";
                        }
                    } else {
                        $status = "Introduce tus credenciales";
                    }
                    ?>
                    <p><?php  echo $status; ?></p>
                </div>
            </form>
        </div> -->
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
    <script src="js/funciones-divertidas.js"></script>
</body>

</html>