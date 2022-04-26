<?php
session_start();
require "../back/functions.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/style.inside.test.css">
    <title>Memeologia | Registro</title>
</head>

<body>
    <header>
        <div class="h-1">
            <label for="menu"><img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNDgiIGhlaWdodD0iNDgiCnZpZXdCb3g9IjAgMCAxNzIgMTcyIgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxwYXRoIGQ9Ik0wLDE3MnYtMTcyaDE3MnYxNzJ6IiBmaWxsPSJub25lIj48L3BhdGg+PGc+PHJlY3QgeD0iNiIgeT0iMjEiIHRyYW5zZm9ybT0ic2NhbGUoMy41ODMzMywzLjU4MzMzKSIgd2lkdGg9IjM2IiBoZWlnaHQ9IjYiIGZpbGw9IiMwMDAwMDAiPjwvcmVjdD48cmVjdCB4PSI2IiB5PSIxMCIgdHJhbnNmb3JtPSJzY2FsZSgzLjU4MzMzLDMuNTgzMzMpIiB3aWR0aD0iMzYiIGhlaWdodD0iNiIgZmlsbD0iIzAwMDAwMCI+PC9yZWN0PjxyZWN0IHg9IjYiIHk9IjMyIiB0cmFuc2Zvcm09InNjYWxlKDMuNTgzMzMsMy41ODMzMykiIHdpZHRoPSIzNiIgaGVpZ2h0PSI2IiBmaWxsPSIjMDAwMDAwIj48L3JlY3Q+PHJlY3QgeD0iMTAiIHk9IjI0IiB0cmFuc2Zvcm09InNjYWxlKDMuNTgzMzMsMy41ODMzMykiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzIiBmaWxsPSIjY2NjY2NjIj48L3JlY3Q+PHJlY3QgeD0iMTAiIHk9IjEzIiB0cmFuc2Zvcm09InNjYWxlKDMuNTgzMzMsMy41ODMzMykiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzIiBmaWxsPSIjY2NjY2NjIj48L3JlY3Q+PHJlY3QgeD0iMTAiIHk9IjM1IiB0cmFuc2Zvcm09InNjYWxlKDMuNTgzMzMsMy41ODMzMykiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzIiBmaWxsPSIjY2NjY2NjIj48L3JlY3Q+PC9nPjwvZz48L3N2Zz4=" /></label>
            <input type="checkbox" id="menu">
            <nav>
                <a href="principal.php">Perfil</a>
                <a href="#">Tests</a>
                <a href="ranking.php">Ranking Global</a>
                <a href="../back/close-session.php" class="close">Cerrar Sesion</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <h1>TESTS</h1>
            <div class="principal">
                <details open>
                    <summary class="one">Principiantes</summary>
                    <div class="links" id="one">
                        <a href="./tests/principiante-nivel-1.php">Nivel 1</a>
                        <a href="./tests/principiante-nivel-2.php">Nivel 2</a>
                        <a href="./tests/principiante-nivel-3.php">Nivel 3</a>
                        <a href="./tests/principiante-nivel-3.php">Nivel 4</a>
                    </div>

                </details>
            </div>
            <div class="principal">
                <details open>
                    <summary class="two">Intermedio</summary>
                    <div class="links" id="two">
                        <a href="">Nivel 1</a>
                        <a href="">Nivel 2</a>
                        <a href="">Nivel 4</a>
                        <a href="">Nivel 5</a> <!-- AQUI DESBLOQUEAS HUMOR NEGRO Y LGTBI -->
                        <a href="">Nivel 6</a>
                    </div>
                </details>
            </div>
            <div class="principal">
                <details open>
                    <summary class="three">🌮mplicado</summary>
                    <div class="links" id="three">
                        <a href="">Nivel 1</a>
                        <a href="">Nivel 2</a>
                        <a href="">Nivel 3</a>
                        <a href="">Nivel 4</a>
                    </div>

                </details>
            </div>
            <div class="principal">
                <details open>
                    <summary class="four">Master</summary>
                    <div class="links" id="four">
                        <a href="">Nivel 1</a>
                        <a href="">Nivel 2</a>
                        <a href="">Nivel 3</a>
                        <a href="">Nivel 4</a>
                    </div>

                </details>
            </div>
        </div>

    </main>
    <aside>
        <div>
            <details>
                <summary>Humor negro</summary>
                <div>
                    <a href="">Nivel 1</a>
                    <a href="">Nivel 2</a>
                    <a href="">Nivel 3</a>
                    <a href="">Nivel 4</a>
                </div>

            </details>
        </div>
        <div>
            <details>
                <summary>LGTBIQ+</summary>
                <div>
                    <form action="">
                        <select name="lgtb" id="">
                            <option value="0" selected>SELECCIONA</option>
                            <option value="1">Nivel 1-+</option>
                            <option value="2">Nivel 1-*</option>
                        </select>
                        <input type="submit" value="seleccionar">
                    </form>
                    <a href="">Nivel 2</a>
                    <a href="">Nivel 3</a>
                    <a href="">Nivel 4</a>
                </div>

            </details>
        </div>
    </aside>
    <footer>
        <p>Footer</p>
    </footer>
</body>

</html>