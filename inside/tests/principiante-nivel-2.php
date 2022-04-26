<?php
session_start();
require "../../back/functions.php";
//Recovery data from p_test_1
$tableName = "p_test_2";
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
    <link rel="stylesheet" href="../../assets/css/style.test.css">
    <title>Memeologia | Principiantes 2</title>
    <style>
        /*This is for hide the inputs */
        div[class^="radio"] input {
            display: none;
        }

        /*This is for control de img pixels*/
        form img {
            width: 100%;

        }
    </style>
</head>

<body>
    <header>
        <div class="h-1">
            <label for="menu" class="label"><img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNDgiIGhlaWdodD0iNDgiCnZpZXdCb3g9IjAgMCAxNzIgMTcyIgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxwYXRoIGQ9Ik0wLDE3MnYtMTcyaDE3MnYxNzJ6IiBmaWxsPSJub25lIj48L3BhdGg+PGc+PHJlY3QgeD0iNiIgeT0iMjEiIHRyYW5zZm9ybT0ic2NhbGUoMy41ODMzMywzLjU4MzMzKSIgd2lkdGg9IjM2IiBoZWlnaHQ9IjYiIGZpbGw9IiMwMDAwMDAiPjwvcmVjdD48cmVjdCB4PSI2IiB5PSIxMCIgdHJhbnNmb3JtPSJzY2FsZSgzLjU4MzMzLDMuNTgzMzMpIiB3aWR0aD0iMzYiIGhlaWdodD0iNiIgZmlsbD0iIzAwMDAwMCI+PC9yZWN0PjxyZWN0IHg9IjYiIHk9IjMyIiB0cmFuc2Zvcm09InNjYWxlKDMuNTgzMzMsMy41ODMzMykiIHdpZHRoPSIzNiIgaGVpZ2h0PSI2IiBmaWxsPSIjMDAwMDAwIj48L3JlY3Q+PHJlY3QgeD0iMTAiIHk9IjI0IiB0cmFuc2Zvcm09InNjYWxlKDMuNTgzMzMsMy41ODMzMykiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzIiBmaWxsPSIjY2NjY2NjIj48L3JlY3Q+PHJlY3QgeD0iMTAiIHk9IjEzIiB0cmFuc2Zvcm09InNjYWxlKDMuNTgzMzMsMy41ODMzMykiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzIiBmaWxsPSIjY2NjY2NjIj48L3JlY3Q+PHJlY3QgeD0iMTAiIHk9IjM1IiB0cmFuc2Zvcm09InNjYWxlKDMuNTgzMzMsMy41ODMzMykiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzIiBmaWxsPSIjY2NjY2NjIj48L3JlY3Q+PC9nPjwvZz48L3N2Zz4=" /></label>
            <input type="checkbox" id="menu">
            <nav>
                <a href="../principal.php">Perfil</a>
                <a href="../test.php">Tests</a>
                <a href="../ranking.php">Ranking Global</a>
                <a href="../../back/close-session.php" class="close">Cerrar Sesion</a>
            </nav>
        </div>
    </header>
    <main>
        <h1>Test para Principiantes - Nivel 2</h1>
        <div>
            <form action="principiante-nivel-2.php?id=#view" method="GET">
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

                    $results = getCorrectResults("p_test_2");

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

    </main>
    <footer>
        <p>Footer</p>
    </footer>
</body>

</html>