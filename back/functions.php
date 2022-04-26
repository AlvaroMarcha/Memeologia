<?php
//IMPORTANT VARSS
//Principals variables

//Tests
$answer_1 = "";
$answer_2 = "";
$answer_3 = "";
$answer_4 = "";
$answer_5 = "";
$answer_6 = "";
$answer_7 = "";
$answer_8 = "";
$answer_9 = "";
$answer_10 = "";


//Status
$status = "Not initialized";
$user = "";
//Method getConnection()
function getConnection()
{
    // $host="localhost";
    // $dbname="u917976464_memeologia";
    // $username="u917976464_memeologo";
    // $pass="Chalatenang01994";
    $host="localhost";
    $dbname="memeologia";
    $username="root";
    $pass="";
    $base = new PDO("mysql:dbname=$dbname;host=$host", $username, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $GLOBALS["status"] = "Succeded connection";
    return $base;
}

//Login - Comprobation
function existLogin($user, $pass)
{
    $base = getConnection();
    $sql = "SELECT * FROM users WHERE user=:user AND pass=:pass";
    $sentencia = $base->prepare($sql);
    $sentencia->bindParam(":user", $user);
    $encrypted = sha1($pass);
    $sentencia->bindParam(":pass", $encrypted);
    $sentencia->execute();


    $exist = false;
    if ($sentencia->rowCount() == 1) {
        $exist = true;
    }

    // echo sha1("1111");

    //$GLOBALS["status"] = "User logged - User: $user and password: $encrypted";

    return $exist;
}

//Insert - Register
function registerUser($user, $pass)
{
    $encrypted = sha1($pass);
    $sql = "SELECT user FROM users WHERE user=:user";
    $base = getConnection();
    $sentencia = $base->prepare($sql);
    $sentencia->bindParam(":user", $user);
    $sentencia->execute();

    if ($sentencia->rowCount() == 1) {
        $GLOBALS["status"] = "User already exist";
    } else if ($sentencia->rowCount() == 0) {
        $title = "Ningun titulo";
        $exp = 0;
        $sql = "INSERT INTO users (user, pass, title, experience) VALUES (:user, :pass, :title, :experience)";
        $sentencia = $base->prepare($sql);
        $sentencia->bindParam(":user", $user);
        $sentencia->bindParam(":pass", $encrypted);
        $sentencia->bindParam(":title", $title);
        $sentencia->bindParam(":experience", $exp);
        $sentencia->execute();

        $GLOBALS['status'] = "Registered";
    }
}

//To get the user_ID
function getUserId($user)
{
    $base = getConnection();
    $sql = "SELECT id FROM users WHERE user=:user";
    $sentencia = $base->prepare($sql);
    $sentencia->bindParam(':user', $user);
    $sentencia->execute();

    $results = $sentencia->fetchAll();

    $id = 0;
    foreach ($results as $value) {
        $id = $value['id'];
    }

    $GLOBALS['status'] = "Getting the user id - User: $user";

    return $id;
}

//Functions to get data from database for the tests
function getDataFromDBToTests($tableName)
{
    $base = getConnection();
    $sql = "SELECT * FROM $tableName";
    $sentencia = $base->prepare($sql);
    $sentencia->execute();

    $GLOBALS['status'] = "All the data from $tableName was recovery";

    return $sentencia->fetchAll();
}

//Function to get data from database for corrects results
function getCorrectResults($tableName)
{
    $base = getConnection();
    $sql = "SELECT correct FROM $tableName";
    $sentencia = $base->prepare($sql);
    $sentencia->execute();

    $GLOBALS['status'] = "All the corrects results from $tableName were recovery";

    return $sentencia->fetchAll();
}

//Function to save data to database
function saveDataUsers($exp, $user)
{

    $base = getConnection();
    $sql = "SELECT experience FROM users WHERE user=:user";
    $sentencia = $base->prepare($sql);
    $sentencia->bindParam(':user', $user);
    $sentencia->execute();
    $results = $sentencia->fetchAll();

    $expe = $exp;
    foreach ($results as $value) {
        $expe += $value['experience'];
    }


    $sql = "UPDATE users SET experience=:experience WHERE user=:user";
    $sentencia = $base->prepare($sql);
    $sentencia->bindParam(':experience', $expe, PDO::PARAM_INT);
    $sentencia->bindParam(':user', $user, PDO::PARAM_STR);
    $sentencia->execute();

    $GLOBALS['status'] = "Data saved successfully";
}

//Funtion to save data session into database
function saveSession($user)
{
    $id_session = session_id();
    $base = getConnection();
    $sql = "INSERT INTO sessions (id_session, user) VALUES (:id_session, :user)";
    $sentencia = $base->prepare($sql);
    $sentencia->bindParam(":id_session", $id_session);
    $sentencia->bindParam("user", $user);
    $sentencia->execute();

    $GLOBALS['status'] = "Data session saved successfully";
}

//Function to destroy session from database
function destroySession($id_session)
{
    $base = getConnection();
    $sql = "DELETE FROM sessions WHERE id_session=:id_session";
    $sentencia = $base->prepare($sql);
    $sentencia->bindParam(":id_session", $id_session);
    $sentencia->execute();

    echo $id_session;
    $GLOBALS['status'] = "Session destroyed successfully";
}

//Function to get user from sessions
function getUsername($id_session)
{
    $base = getConnection();
    $sql = "SELECT * FROM sessions WHERE id_session=:id_session";
    $sentencia = $base->prepare($sql);
    $sentencia->bindParam(':id_session', $id_session);
    $sentencia->execute();
    $results = $sentencia->fetchAll();

    $name = "";
    foreach ($results as $name) {
        $name = $name['user'];
    }

    $GLOBALS['status'] = "Username was recovery successfully";

    return $name;
}

//Function to get the exp of users
function getExpUser($user)
{
    $base = getConnection();
    $sql = "SELECT experience FROM users WHERE user=:user";
    $sentencia = $base->prepare($sql);
    $sentencia->bindParam(':user', $user);
    $sentencia->execute();
    $results = $sentencia->fetchAll();

    $experience = "";
    foreach ($results as $value) {
        $experience = $value['experience'];
    }

    $GLOBALS['status'] = "Experience recovery fron user: $user";

    return $experience;
}

//Function to get title
function getTitleByExp($username, $exp)
{
    //Verify the title to set at the user
    $title = getTitle($exp);
    $cleanTitle=strip_tags($title);
    $base = getConnection();
    $sql = "UPDATE users SET title=:title WHERE user=:user";
    $sentencia = $base->prepare($sql);
    $sentencia->bindParam(":title", $cleanTitle);
    $sentencia->bindParam(':user', $username);
    $sentencia->execute();

    $GLOBALS['status'] = "Title was set correctly to user: $username";

    return $title;
}

//Function to reset profile
function resetProfile($user)
{
    $title = "Ningun titulo";
    $exp = 0;
    $base = getConnection();
    $sql = "UPDATE users SET title=:title, experience=:exp WHERE user=:user";
    $sentencia = $base->prepare($sql);
    $sentencia->bindParam(':title', $title);
    $sentencia->bindParam(':exp', $exp);
    $sentencia->bindParam(':user', $user);
    $sentencia->execute();

    $GLOBALS['status'] = "Datas was reset successfully";
}

//Function to get ranking of users
function getRankTable()
{
    $base = getConnection();
    $sql = "SELECT user, experience FROM users ORDER BY experience DESC LIMIT 3";
    // $sql="SELECT * FROM users";
    $sentencia = $base->prepare($sql);
    $sentencia->execute();
    $results = $sentencia->fetchAll();

    $i = 1;
    foreach ($results as $value) {
        echo '

            <tr>
                <td>'.$i.'</td>
                <td>'.$value['user'].'</td>
                <td>'.$value['experience'].'</td>
            </tr>

        ';
        $i++;
    }

    $GLOBALS['status'] = "Data in table loaded";
}


//Funtion getTitle
function getTitle($exp)
{
    $title = "";
    if ($exp < 100) {
        $title = "<span class='sin'>Sin título</span>";
    } else if ($exp >= 100 && $exp < 250) {
        $title = "<span class='lvl1'>Noob</span>";
    } else if ($exp >= 250 && $exp < 400) {
        $title = "<span class='lvl1'>Interesado</span>";
    } else if ($exp >= 400 && $exp < 550) {
        $title = "<span class='lvl1'>Reconocido</span>";
    } else if ($exp >= 550 && $exp < 700) {
        $title = "<span class='lvl1 last1'>Baja mierda</span>";
    } else if ($exp >= 700 && $exp < 900) {
        $title = "<span class='lvl2'>Listillo</span>";
    } else if ($exp >= 900 && $exp < 1200) {
        $title = "<span class='lvl2'>Joven sabio</span>";
    } else if ($exp >= 1200 && $exp < 1500) {
        $title = "<span class='lvl2'>Sabiondo</span>";
    } else if ($exp >= 1500 && $exp < 1900) {
        $title = "<span class='lvl2 patriarca'>Patriarca</span>";
    } else if ($exp >= 1900 && $exp < 2400) {
        $title = "<span class='lvl2 last2'>Media mierda</span>";
    } else if ($exp >= 2400 && $exp < 2700) {
        $title = "<span class='lvl3'>Enterado</span>";
    } else if ($exp >= 2700 && $exp < 3050) {
        $title = "<span class='lvl3'>Profesional del meme</span>";
    } else if ($exp >= 3050 && $exp < 3400) {
        $title = "<span class='lvl3'>Shitposter</span>";
    } else if ($exp >= 3400 && $exp < 4000) {
        $title = "<span class='lvl3 last3'>Alta mierda</span>";
    } else if ($exp >= 4000 && $exp < 5000) {
        $title = "<span class='lvl4'>Licenciado en memeologia</span>";
    } else if ($exp >= 5000 && $exp < 6050) {
        $title = "<span class='lvl4'>Ingeniero en memeologia</span>";
    } else if ($exp >= 6050 && $exp < 7100) {
        $title = "<span class='lvl4'>Doctor en memeologia</span>";
    } else if ($exp >= 6050 && $exp >= 7100) {
        $title = "<span class='lvl4 last4'>Memeologo</span>";
    }
    return $title;
}
