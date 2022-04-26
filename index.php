<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/style.header.css">
    <title>Memeologia</title>

    <style>
    /* Banners */
    .banner {
        display: block;
        width: 100%;
        height: 500px;
        background: linear-gradient(rgba(0, 47, 255, 0.486), rgba(0, 132, 255, 0.308)), url(assets/img/banner-troll.jpg);
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


    </style>
</head>

<body>
    <header>
        <button class="menuB" id="menuBoton" onclick="toggle()" value="false"><img src="assets/icons/menu-dia.png"
                alt=""></button>
        <div id="nav-links">
            <a href="#" id="1">Memeologia</a>
            <a href="usuarios.php" id="2">Usuarios</a>
            <a href="nosotros.php" id="3">Nosotros</a>
            <a href="ideas.php" id="4">Contacto de Ideas</a>
            <a href="#" onclick="closeMenu()" id="last"><img src="assets/icons/flechaArriba.png" alt="" width="30px">
            </a>
        </div>
        <div id="nav-links-desktop">
            <a href="#" id="1">Memeologia</a>
            <a href="usuarios.php" id="2">Usuarios</a>
            <a href="nosotros.php" id="3">Nosotros</a>
            <a href="ideas.php" id="4">Contacto de Ideas</a>
            </a>
        </div>
    </header>
    <main>
        <div class="banner">
            <h3 class="superior">Welcome to</h3>
            <h3 class="inferior">Memelandia</h3>
        </div>
        <h1 class="title">Welcome to Memeologia Bro.</h1>
        <div class="content">
            <p class="text">
                Bienvenido a Gringoland... digo a Memelandia o como me gusta decirle a mí "Memeología".
                Como bien habrás leído aquí el 80% de la nota es el tiroteo Escolar... Cualquier parecido con
                la realidad es puramente coincidencia.
                Soy alguien al que le gusta hacer cosas raras y a veces estúpidas y ha creado esta web
                para poder divertirse con los colegas y demostrar quién coño sabe más sobre este
                maravilloso mundo, jeje.
                ¿Te atreves?
            </p>
            <p class="text">
                Aquí encontrarás desde humor de lo más normalito hasta el más chungo. (Humor negro, ya sabeis).
                Si eres un cristalito, te pido encarecidamente por favor que abandones la página. No queremos
                ofendiditos
                que no aguanten el estilo Neutron.
            </p>
            <p class="text">
                Por otro lado si eres quien yo sé que eres, te doy la Bienvenida de nuevo. <br> <strong>ESTO VA A SER
                    ÉPICO PAPUS.</strong>
            </p>
            <h2 class="title">¡Empieza!</h2>
            <p class="text">
                Para comenzar te explicaré cuales son los pasos a seguir. <br><br>
                <span>Primero:</span> Ir al apartado de "Usuarios" y crear una cuenta en "Registrarse"<br><br>
                <span>Segundo:</span> Ir al apartado de "Usuarios" y entrar con tu nueva cuenta<br><br>
                <span>Tercero:</span> Disfrutar de los test sobre Memeología que he recopilado.
            </p>
            <a href="usuarios.php" class="btn">Ir a Usuarios</a>
        </div>
        <h1 class="title">Here the tiroteo Escolar cuenta 80% de Calificacion</h1>
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