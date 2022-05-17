<?php require "back/functions.php";    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/style.header.css">
    <link rel="stylesheet" href="assets/css/style.forms.css">
    <title>Memeologia</title>

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
            <a href="#" id="4">Contacto de Ideas</a>
            <a href="#" onclick="closeMenu()" id="last"><img src="assets/icons/flechaArriba.png" alt="" width="30px">
            </a>
        </div>
        <div id="nav-links-desktop">
            <a href="index.php" id="1">Memeologia</a>
            <a href="usuarios.php" id="2">Usuarios</a>
            <a href="nosotros.php" id="3">Nosotros</a>
            <a href="#" id="4">Contacto de Ideas</a>
            </a>
        </div>
    </header>
    <main>
        <h1 class="title">Recuperando tu contraseña, así te quería agarrar yo puerco.</h1>
        <div class="form">
            <form action="recovery.php" method="POST">
                <input type="text" name="user" placeholder="Usuario" autocomplete="off"><br>
                <input type="email" name="email" placeholder="Email" autocomplete="off"><br>
                <div class="button">
                    <button type="submit" name="enviar">Enviar Idea</button>
                    <div class="status" id="form">
                    <?php
                    
                    $tag="";
                    if (isset($_POST['enviar'])) {
                        //Recuperamos las variables
                        $user = $_POST['user'];
                        $email = $_POST['email'];
                        if (!empty($user) && !empty($email)) {
                            //Here comprobation of emails
                            $tmpPass=generatePass();
                            $encrypted = sha1($tmpPass);

                            $base = getConnection();
                            $sql="UPDATE users SET pass=:tmpPass WHERE user=:user and email=:email";
                            $sentencia= $base->prepare($sql);
                            $sentencia->bindParam(':user',$user);
                            $sentencia->bindParam(':email',$email);
                            $sentencia->bindParam(':tmpPass',$encrypted);
                            $sentencia->execute();

                            $asunt="Recuperacion de contraseña";
                            $message="Hola $user, <br> Has solicitado recuperar tu contraseña. Si no has sido tú, 
                            por seguridad la hemos cambiado, sigue los siguientes pasos para poder cambiarla 
                            y poner la que quieras. <br> En caso de haber sido tú sigue los mismos pasos. 
                            Tu nueva contraseña temporal es: <span class='pass'>$tmpPass</span> .<br><br> Te aconsejamos que la cambies lo antes posible. <br>
                            <br><br><br><br>
                            Un saludo, el equipo memeologico.";
                            //Important
                            $header="Content-type:text/html;charset=UTF-8" . "\r\n"."From: memeologo@memeologia.com";

                            $content='
                            <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>HTML Email Template</title>
                                <style>
                                    main{
                                        display: block;
                                        width: 100%;
                                        height: max-content;
                                        margin: 0 auto;
                                        border: 5px solid black;
                                    }
                                    h1{
                                        display: block;
                                        width: 100%;
                                        height: max-content;
                                        margin: 0 auto;
                                        border-bottom: 3px solid black;
                                    }
                                    div.content{
                                        display: block;
                                        width: 100%;
                                        height: 400px;
                                        margin: 0 auto;
                                        border: 5px solid white;
                                        background-color:black;
                                        color: white;

                                        font-size: 16px;

                                    }

                                    span.pass{
                                        font-weight: bolder;
                                        color: green;
                                        border-bottom: 1px solid cyan;
                                        font-size: 20px;

                                    }

                                    p.text{
                                        padding-top:10px;
                                        padding-left:8px;
                                        padding-left:5px;

                                    }
                                </style>
                            </head>
                            <body>
                                <main>
                                    <h1>MEMEOLOGIA.COM</h1>
                                    <h2>Recuperación de Contraseña</h2>
                                    <div class="content">
                                    <p class="text">'.$message.'</p>
                                    </div>
                                </main>
                            </body>
                            </html>
                            ';

                            mail($email, $asunt, $content, $header);
                            header("location: login.php");

                            
                            
                        } else {
                            $status = "Rellena los campos";
                            $tag="<p class='introduce'>$status</p>";
                        }
                    }
                    ?>
                        <?php  echo $tag; ?>
                    </div>
                    <a href="">Encima no te acuerdas de tu usuario? </br> Ah perro no traes el Onmitrix</a>
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