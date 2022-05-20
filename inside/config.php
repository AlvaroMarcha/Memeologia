<?php
session_start();
require "../back/functions.php";

$name=getUserName(session_id());
$email=getUserEmail(session_id(), $name);
$url=getUserPicPath();
$mensaje= "<p class='messagePass'>Introduce una nueva contraseña</p>";
$mensajeMail="<p class='messagePass'>Introduce un nuevo email</p>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/style.header.css">
    <link rel="stylesheet" href="../assets/css/style.config.css">
    <title>Memeologia | Registro</title>
    <style>
    main {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto auto auto auto;
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
            <div class="toUploadPicProfile" id="pic">
                <form action="config.php" method="post" enctype="multipart/form-data" class="form1">
                    <!-- Upload new image -->
                    <label for="file" id="label">
                        <span><img src="../assets/icons/uploadimg.png">
                            <p>Seleccionar</p>
                        </span>
                    </label><br>
                    <input type="file" name="imagen" id="file">
                    <input type="submit" value="Subir" class="submit" name="submitProfile">
                </form>
                <!-- Aquí funcionalidad -->
                <?php 
                    // Comprobamos si se ha pulsado el boton del form 
                    if(isset($_POST['submitProfile'])){

                        if(!empty($_POST['submitProfile'])){
                            // File data
                            $fileTmpPath=$_FILES['imagen']['tmp_name'];
                            $fileName=$_FILES['imagen']['name'];
                            $fileSize=$_FILES['imagen']['size'];
                            $fileType=$_FILES['imagen']['type'];
                            $extension=explode(".", $fileName);
                            $newFileName=$name.".png";

                            $uploadFileDir="../users/profilePic/";
                            $dest_path=$uploadFileDir.$newFileName;

                            if(move_uploaded_file($fileTmpPath, $dest_path)){
                                changePicProfile($dest_path);
                                header("location: config.php?#pic");
                            }
                        }
                    }
                ?>
            </div>
        </div>

        <!-- CONTRASEÑA -->

        <div class="password">
            <div class="toChangePass">
                <input type="password" id="newPass" value="***********" disabled>
                <input type="submit" value="Cambiar Password" onclick="openPopPass()">
            </div>
        </div>
        <div class="popPass" id="popPass">
            <a href="config.php#popPass" id="closePopPass" onclick="closePopPass()">X</a>
            <form action="config.php" method="post">
                <!-- Change password confirm-->
                <input type="password" name="newPass1" value="" placeholder="Nueva contraseña">
                <input type="password" name="newPass2" value="" placeholder="Repetir contraseña">
                <input type="submit" value="Nueva contraseña" name="enviarContra">
                <?php
                    echo $mensaje;
                ?>
            </form>
            <!-- Aquí funcionalidad -->
            <?php 
                    // Comprobamos si se ha pulsado el boton del form 
                    if(isset($_POST['enviarContra'])){
                        $campo1=$_POST['newPass1'];
                        $campo2=$_POST['newPass2'];

                        if(!empty($campo1) && !empty($campo2)){
                            if(changePasswordAndValidation($campo1,$campo2)){
                                echo "<script> alert('success')</script>";
                            }else{
                                // echo "<script> alert('Las contraseñas no eran iguales')</script>";
                            }
                        }else{
                            echo "<script> alert('Rellena los campos')</script>";
                        }
                    }
            ?>
        </div>

        <!-- EMAIL -->

        <div class="email">
            <div class="toChangeEmail">
                <!-- Change email -->
                <input type="email" name="newEmail" id="newEmail" value="<?php echo $email; ?>" disabled>
                <input type="submit" value="Cambiar email" onclick="openPopEmail()">
            </div>
        </div>
        <div class="popEmail" id="popEmail">
            <a href="config.php#popEmail" id="closePopPass" onclick="closePopEmail()">X</a>
            <form action="config.php" method="post">
                <!-- Change password confirm-->
                <input type="email" name="newEmail1" value="" placeholder="Nuevo email">
                <input type="email" name="newEmail2" value="" placeholder="Repetir email">
                <input type="submit" value="Nuevo email" name="enviarEmail">
                <?php
                    echo $mensajeMail;
                ?>
            </form>
            <!-- Aquí funcionalidad -->
            <?php 
                    // Comprobamos si se ha pulsado el boton del form 
                    if(isset($_POST['enviarEmail'])){
                        $campoE1=$_POST['newEmail1'];
                        $campoE2=$_POST['newEmail2'];

                        if(!empty($campoE1) && !empty($campoE2)){
                            if(changeEmailAndValidation($campoE1,$campoE2)){
                                echo "<script> alert('success')</script>";
                            }else{
                                echo "<script> alert('Las emails no eran iguales')</script>";
                            }
                        }else{
                            echo "<script> alert('Rellena los campos')</script>";
                        }
                    }
            ?>
        </div>


        <script src="../js/menu.js"></script>
        <script src="../js/functions.js"></script>
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