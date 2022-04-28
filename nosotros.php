<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/style.header.css">
    <link rel="shortcut icon" href="assets/icons/icono.ico" type="image/x-icon">
    <title>Memeologia</title>

    <style>
    /* Banners */
    .banner {
        display: block;
        width: 100%;
        height: 550px;
        background: linear-gradient(rgba(0, 47, 255, 0.486), rgba(0, 132, 255, 0.308)), url(assets/img/perromamado.png);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;

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

    h3.inferior {
        display: block;
        width: max-content;
        height: max-content;
        margin: auto;

        position: relative;
        top: 320px;

        font-size: 50px;
        color: rgb(200, 255, 0);
        text-shadow: 8px 10px rgba(255, 255, 255, 0.473);

    }

    @media (min-width: 860px) {

        /* Banners */
        .banner {
            display: block;
            width: 100%;
            height: 550px;
            background: linear-gradient(rgba(0, 47, 255, 0.486), rgba(0, 132, 255, 0.308)), url(assets/img/perro.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;

        }

    }

    @media (min-width: 1368px) {

        /* Banners */
        .banner {
            display: block;
            width: 100%;
            height: 750px;
            background: linear-gradient(rgba(0, 47, 255, 0.486), rgba(0, 132, 255, 0.308)), url(assets/img/perro.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;

        }

        h3.inferior {
            display: block;
            width: max-content;
            height: max-content;
            margin: auto;

            position: relative;
            top: 520px;

            font-size: 50px;
            color: rgb(200, 255, 0);
            text-shadow: 8px 10px rgba(255, 255, 255, 0.473);

        }

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
            <a href="#" id="3">Nosotros</a>
            <a href="ideas.php" id="4">Contacto de Ideas</a>
            <a href="#" onclick="closeMenu()" id="last"><img src="assets/icons/flechaArriba.png" alt="" width="30px">
            </a>
        </div>
        <div id="nav-links-desktop">
            <a href="index.php" id="1">Memeologia</a>
            <a href="usuarios.php" id="2">Usuarios</a>
            <a href="#" id="3">Nosotros</a>
            <a href="ideas.php" id="4">Contacto de Ideas</a>
            </a>
        </div>
    </header>
    <main>
        <div class="banner">
            <h3 class="superior">Quienes</h3>
            <h3 class="inferior">Somos</h3>
        </div>
        <h1 class="title">Nosotros</h1>
        <div class="content">
            <p class="text">
                Por ahora solo soy yo. Una persona a la que le gustan mucho los memes y le encanta perder
                el tiempo con ellos. Como cualquier personal promedio. Nunca te fíes de la gente que no
                ve memes... No son de fiar. <br>

                Esto se convirtió en el resultado de una idea estúpida en el verano del 2021. ¿Como ocurrió todo?
            </p>
            <p class="text">
                Todo empezó con una Partida de Warzone con los compas "Brunos".
                Nosotros todos unos intelectuales queríamos saber quien sabe más
                sobre memes, a lo que yo respondí que claramente el ganador era yo.
            </p>
            <p class="text">
                A partir de ahí surgió la idea de realizar esta página de memes con
                cierta variedad de test que realizar para saber quien tiene una mayor
                puntuación y demostrar por fin quien manda.
            </p>
            <h2 class="title warning">¡Ojo!</h2>
            <p class="text">
                Esto esta en proceso de creacion, hay ciertos tests creados pero ahora
                se pide algo de paciencia.
            </p>
            <p class="text">
                Aquí encontrarás humor quizá no apto para ti, pero hay otras secciones
                que si estarán disponibles para que puedas disfrutar tambien de nuestra mejor
                recopilacion de memes. <br>
                Debes saber primero que estas opciones de humor mas avanzado e hiriente se deben
                desbloquear llegando con cierta experiencia en la cual desbloqueas un titulo.
            </p>
            <h2 class="title">Nuestro Objetivo</h2>
            <p class="text">
                Nuestro objetivo, los Brunos y yo queremos ofreceros una gran variedad de
                memes e ir mejorando poco a poco los apartados de la web. Cualquier idea
                que podais tener podeis enviarla por el formulario de contacto para ideas.
                <a href="ideas.php" target="_blank">Pincha aquí</a>
            </p>
            <hr>
            <p class="text explication">
                1. Brunos: Conjunto de sujetos amigos míos con apellidos panchitos. (Porque lo somos, o casi todos.)
            </p>
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