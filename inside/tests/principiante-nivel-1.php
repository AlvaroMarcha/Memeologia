<?php
session_start();
require "../../back/functions.php";
//Recovery data from p_test_1
$tableName = "p_test_1";
$results = getDataFromDBToTests($tableName);
$local = "";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/global.css">
    <link rel="stylesheet" href="../../assets/css/style.header.css">
    <link rel="stylesheet" href="../../assets/css/style.inside.principal.css">
    <link rel="stylesheet" href="../../assets/css/style.test.css">
    <title>Memeologia | Test 1</title>
    <style>
    main {
        margin-top: 0px;
        border-top: 2px solid black;
        background-color: #01111e;
        margin-bottom: 0px;
        color: white;
    }

    /*This is for hide the inputs */
    div[class^="radio"] input {
        display: none;
    }

    /*This is for control de img pixels*/
    form img {
        width: 100%;

    }


    @media (min-width: 860px) {}
    </style>
</head>

<body>
    <header>
        <button class="menuB" id="menuBoton" onclick="toggle()" value="false"><img src="../../assets/icons/menu-dia.png"
                alt=""></button>
        <div id="nav-links">
            <a href="../principal.php" id="1">Perfil</a>
            <a href="test.php" id="2">Tests</a>
            <a href="nosotros.php" id="3">Ranking Global</a>
            <a href="config.php" id="4">Configuración</a>
            <a href="../back/close-session.php" id="5">Cerrar sesión</a>
            <a href="#" onclick="closeMenu()" id="last"><img src="../../assets/icons/flechaArriba.png" alt="" width="30px">
            </a>
        </div>
        <div id="nav-links-desktop">
            <a href="../principal.php" id="1">Perfil</a>
            <a href="test.php" id="2">Tests</a>
            <a href="nosotros.php" id="3">Ranking Global</a>
            <a href="config.php" id="4">Configuración</a>
            <a href="../back/close-session.php" id="4"><img src="../../assets/icons/sesion-close.png" width="30px"></a>
            </a>
        </div>
    </header>
    <main>
        <h1>Test para Principiantes - Nivel 1</h1>
        <div>
            <form action="principiante-nivel-1.php?id=#view" method="GET">
                <?php
                $i = 1;
                foreach ($results as $value) {
                    //Create variables for radio inputs
                    $forid1 = 1;
                    $forid2 = 2;
                    $forid3 = 3;
                    $name = "p_$i";
                    echo '
                    <div class="form-c">
                        <h3>' . $value['question'] . '</h3>
                        <img src="' . $value['url'] . '" alt="meme-1-test-1">
                        <div class="radio-1">
                            <div>
                                <input type="radio" name="' . $name . '" id="' . $name . '_r-' . $forid1 . '" value="' . $value['answer_1'] . '">
                                <label for="' . $name . '_r-' . $forid1 . '">' . $value['answer_1'] . '</label>
                                <input type="radio">
                            </div>
                            <div>
                                <input type="radio" name="' . $name . '" id="' . $name . '_r-' . $forid2 . '" value="' . $value['answer_2'] . '">
                                <label for="' . $name . '_r-' . $forid2 . '">' . $value['answer_2'] . '</label>
                            </div>
                            <div>
                                <input type="radio" name="' . $name . '" id="' . $name . '_r-' . $forid3 . '" value="' . $value['answer_3'] . '">
                                <label for="' . $name . '_r-' . $forid3 . '">' . $value['answer_3'] . '</label>
                            </div>
                        </div>
                    </div>
                    ';
                    $i++;
                }
                ?>
                <div class="send">
                    <input type="submit" name="send" class="send" value="Comprobar"></input>
                </div>
            </form>
            <div class="result" id="view">
                <?php
                $exp = 0;
                $hits = 0;

                if (isset($_GET['send'])) {
                    if (isset($_GET['p_1'])) {
                        $answer_1 = $_GET['p_1'];
                    }

                    if (isset($_GET['p_2'])) {
                        $answer_2 = $_GET['p_2'];
                    }

                    if (isset($_GET['p_3'])) {
                        $answer_3 = $_GET['p_3'];
                    }

                    if (isset($_GET['p_4'])) {
                        $answer_4 = $_GET['p_4'];
                    }

                    if (isset($_GET['p_5'])) {
                        $answer_5 = $_GET['p_5'];
                    }

                    if (isset($_GET['p_6'])) {
                        $answer_6 = $_GET['p_6'];
                    }

                    if (isset($_GET['p_7'])) {
                        $answer_7 = $_GET['p_7'];
                    }

                    if (isset($_GET['p_8'])) {
                        $answer_8 = $_GET['p_8'];
                    }

                    if (isset($_GET['p_9'])) {
                        $answer_9 = $_GET['p_9'];
                    }

                    if (isset($_GET['p_10'])) {
                        $answer_10 = $_GET['p_10'];
                    }

                    $results = getCorrectResults("p_test_1");

                    $data = array($answer_1, $answer_2, $answer_3, $answer_4, $answer_5, $answer_6, $answer_7, $answer_8, $answer_9, $answer_10);
                    $i = 0;
                    foreach ($results as $value) {
                        if ($data[$i] == $value['correct']) {
                            if ($i == 0) {
                                $hits++;
                                $exp += 5;
                            } else if ($i == 1) {
                                $hits++;
                                $exp += 5;
                            } else if ($i == 2) {
                                $hits++;
                                $exp += 5;
                            } else if ($i == 3) {
                                $hits++;
                                $exp += 7;
                            } else if ($i == 4) {
                                $hits++;
                                $exp += 8;
                            } else if ($i == 5) {
                                $hits++;
                                $exp += 10;
                            } else if ($i == 6) {
                                $hits++;
                                $exp += 13;
                            } else if ($i == 7) {
                                $hits++;
                                $exp += 14;
                            } else if ($i == 8) {
                                $hits++;
                                $exp += 15;
                            } else if ($i == 9) {
                                $hits++;
                                $exp += 18;
                            }
                        }
                        $i++;
                    }
                    //Identify the user session
                    $id_session = session_id();
                    $user=getUsername($id_session);
                    //Here call the method to save data into Database of users - Exp and points
                    saveDataUsers($exp, $user);

                    if ($hits <= 4) {
                        $local = "Has acertado <span class='wrong'>[$hits]</span> - Experiencia ganada: <span class='wrong'>+$exp</span> ";
                    } else if ($hits > 4 && $hits <= 7) {
                        $local = "Has acertado <span class='medio'>[$hits]</span> - Experiencia ganada: <span class='medio'>+$exp</span> ";
                    } else if ($hits > 7 && $hits <= 9) {
                        $local = "Has acertado <span class='good'>[$hits]</span> - Experiencia ganada: <span class='good'>+$exp</span> ";
                    } else if ($hits == 10) {
                        $local = "Has acertado <span class='good'>[$hits]</span> - Experiencia ganada: <span class='gold'>+$exp</span> ";
                    }
                } else {
                    $local = "¡Comprueba el resultado!";
                }
                echo $local;
                ?>
            </div>

        </div>

        <script src="../../js/menu.js"></script>
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
    </main>
    <footer>
        <p>Footer</p>
    </footer>
</body>

</html>