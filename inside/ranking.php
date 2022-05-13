<?php
session_start();
require "../back/functions.php";

$name=getUserName(session_id());

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <title>Memeologia | Registro</title>
</head>

<body>
    <!-- <header>
        <div class="h-1">
            <label for="menu"><img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNDgiIGhlaWdodD0iNDgiCnZpZXdCb3g9IjAgMCAxNzIgMTcyIgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxwYXRoIGQ9Ik0wLDE3MnYtMTcyaDE3MnYxNzJ6IiBmaWxsPSJub25lIj48L3BhdGg+PGc+PHJlY3QgeD0iNiIgeT0iMjEiIHRyYW5zZm9ybT0ic2NhbGUoMy41ODMzMywzLjU4MzMzKSIgd2lkdGg9IjM2IiBoZWlnaHQ9IjYiIGZpbGw9IiMwMDAwMDAiPjwvcmVjdD48cmVjdCB4PSI2IiB5PSIxMCIgdHJhbnNmb3JtPSJzY2FsZSgzLjU4MzMzLDMuNTgzMzMpIiB3aWR0aD0iMzYiIGhlaWdodD0iNiIgZmlsbD0iIzAwMDAwMCI+PC9yZWN0PjxyZWN0IHg9IjYiIHk9IjMyIiB0cmFuc2Zvcm09InNjYWxlKDMuNTgzMzMsMy41ODMzMykiIHdpZHRoPSIzNiIgaGVpZ2h0PSI2IiBmaWxsPSIjMDAwMDAwIj48L3JlY3Q+PHJlY3QgeD0iMTAiIHk9IjI0IiB0cmFuc2Zvcm09InNjYWxlKDMuNTgzMzMsMy41ODMzMykiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzIiBmaWxsPSIjY2NjY2NjIj48L3JlY3Q+PHJlY3QgeD0iMTAiIHk9IjEzIiB0cmFuc2Zvcm09InNjYWxlKDMuNTgzMzMsMy41ODMzMykiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzIiBmaWxsPSIjY2NjY2NjIj48L3JlY3Q+PHJlY3QgeD0iMTAiIHk9IjM1IiB0cmFuc2Zvcm09InNjYWxlKDMuNTgzMzMsMy41ODMzMykiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzIiBmaWxsPSIjY2NjY2NjIj48L3JlY3Q+PC9nPjwvZz48L3N2Zz4=" /></label>
            <input type="checkbox" id="menu">
            <nav>
                <a href="principal.php">Perfil</a>
                <a href="test.php">Tests</a>
                <a href="ranking.php">Ranking Global</a>
                <a href="../back/close-session.php">Cerrar Sesion</a>
            </nav>
        </div>
    </header>
    <main>
        <h1>Ranking Global</h1>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Puesto</th>
                        <th>Usuario</th>
                        <th>Experiencia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo  getRankTable(); 
                    
                    echo php_ini_loaded_file();?>
                </tbody>
            </table>



        </div>
    </main>
    <footer>
        <p>Footer</p>
    </footer> -->


    <div class="name">
            <div class="toChangeName">
                <form action="ranking.php" method="post">
                    <!-- Change name -->
                    <input type="text" name="newName" id="newName" value="<?php echo $name; ?>">
                    <input type="submit" value="Nuevo nombre" name="name">
                </form>
                <!-- Aquí funcionalidad -->
                <?php 
                    if(isset($_POST['name'])){
                        $newName=$_POST['newName'];

                        

                        echo changeUser($newName);
                        // header("Location: ranking.php");

                        echo $newName;
                        


                    }
                
                
                
                ?>
            </div>
        </div>
</body>

</html>