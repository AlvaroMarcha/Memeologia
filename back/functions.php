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
function registerUser($user, $pass, $email)
{   
    $go=false;
    $encrypted = sha1($pass);

    //Verification user name
    $sql = "SELECT user FROM users WHERE user=:user";
    $base = getConnection();
    $sentencia = $base->prepare($sql);
    $sentencia->bindParam(":user", $user);
    $sentencia->execute();

    if ($sentencia->rowCount() == 1) {
        $GLOBALS["status"] = "User already exist";
    } else if ($sentencia->rowCount() == 0) {
        //Verification usermail
        $sql = "SELECT email FROM users WHERE email=:email";
        $sentencia = $base->prepare($sql);
        $sentencia->bindParam(":email", $email);
        $sentencia->execute();

        if($sentencia->rowCount() == 1){
            $GLOBALS['status']="Email already exist";
        }else if($sentencia->rowCount() == 0) {
            $picpath="../users/profilePic/tobey.jpg";
            $title = "Ningun titulo";
            $exp = 0;
            $statusDB="Eres lo que lees";
            $sql = "INSERT INTO users (user, pass, title, experience, email, picpath, status) VALUES (:user, :pass, :title, :experience, :email, :picpath, :status)";
            $sentencia = $base->prepare($sql);
            $sentencia->bindParam(":user", $user);
            $sentencia->bindParam(":pass", $encrypted);
            $sentencia->bindParam(":title", $title);
            $sentencia->bindParam(":experience", $exp);
            $sentencia->bindParam(":email", $email);
            $sentencia->bindParam(":picpath", $picpath);
            $sentencia->bindParam(":status", $statusDB);

            $sentencia->execute();

            $GLOBALS['status'] = "Registered";

            $go=true;

        }
    }
    return $go;
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

//Functions to get the user email address
function getUserEmail($id_session, $user) {
    $id_user=getUserId($user);

    $base=getConnection();
    $sql="SELECT email FROM users WHERE id=:id_user";
    $sentencia=$base->prepare($sql);
    $sentencia->bindParam(":id_user", $id_user);
    $sentencia->execute();

    $results = $sentencia->fetchAll();
    $email="";

    foreach($results as $value){
        $email=$value['email'];
    }

    $GLOBALS['status'] = "Getting the user email address - User: $user";

    return $email;
}


//Functions to get the user memepoints
function getUserMemepoints(){
    //In progress
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




// USER CONFIGURATION FUNCTIONS

//Function to change user
function changeUser($newUser){
    //Connection with database
    $base=getConnection();
    $sql="UPDATE users SET user=:newUser WHERE id=:userId";
    $userName=getUserName(session_id());
    $userId=getUserId($userName);
    $sentencia=$base->prepare($sql);
    $sentencia->bindParam(':newUser',$newUser);
    $sentencia->bindParam(':userId', $userId);
    $sentencia->execute();

    $GLOBALS['status'] = "User name Changed";

    

}

//Function to change password
function changePasswordAndValidation($newPass, $repeatedPass){
    $enter=false;
    //Comprobation
    if($newPass == $repeatedPass){
        //Connection with database
        $base= getConnection();
        $sql="UPDATE users SET pass=:newPass WHERE user=:user";
        $userName=getUserName(session_id());
        //Encrypt password
        $encrypted = sha1($newPass);
        $sentencia=$base->prepare($sql);
        $sentencia->bindParam(':newPass',$encrypted);
        $sentencia->bindParam(':user',$userName);
        $sentencia->execute();

        $GLOBALS['status'] = "User password Changed";

        $enter=true;

    }else{
        $GLOBALS['status'] = "User password not Changed";

        $enter=false;

    }

    return $enter;

}

//Function to change email address
function changeEmailAndValidation($newEmail, $repeatedEmail){
    $enter=false;
    //Comprobation
    if($newEmail == $repeatedEmail){
        //Connection with database
        $base= getConnection();
        $sql="UPDATE users SET email=:newEmail WHERE user=:user";
        $userName=getUserName(session_id());
        $sentencia=$base->prepare($sql);
        $sentencia->bindParam(':newEmail',$newEmail);
        $sentencia->bindParam(':user',$userName);
        $sentencia->execute();

        $GLOBALS['status'] = "User email Changed";

        $enter=true;

    }else{

        $GLOBALS['status'] = "User email not Changed";

        $enter=false;

    }

    return $enter;
}

//Function to change picProfile
function changePicProfile($newPath){
    $base= getConnection();
    $sql = "UPDATE users SET picpath=:newPath WHERE user=:user";
    $userName = getUserName(session_id());
    $sentencia=$base->prepare($sql);
    $sentencia->bindParam(':newPath',$newPath);
    $sentencia->bindParam(':user',$userName);
    $sentencia->execute();

    $GLOBALS['status'] = "User pic Changed";

}

//Function to get picProfile path
function getUserPicPath() {
    //Connection with database
    $base= getConnection();
    $sql="SELECT picpath FROM users WHERE user=:user";
    $userName=getUserName(session_id());
    $sentencia=$base->prepare($sql);
    $sentencia->bindParam(':user',$userName);
    $sentencia->execute();

    $GLOBALS['status'] = "User pic path has been recovery";

    $result=$sentencia->fetchAll();

    $path="";
    foreach($result as $value){
        $path=$value['picpath'];
    }

    return $path;

}

//Function to change Status
function changeStatus($newStatus){
    $base=getConnection();
    $sql="UPDATE users SET status=:newStatus, isstatuschanged=1 WHERE user=:user";
    $userName=getUserName(session_id());
    $sentencia=$base->prepare($sql);
    $sentencia->bindParam(':newStatus',$newStatus);
    $sentencia->bindParam(':user',$userName);
    $sentencia->execute();

    $GLOBALS['status'] = "Status was changed successfully";
}

//Function to get the status
function getStatus(){
    $base=getConnection();
    $sql="SELECT status FROM users WHERE user=:user";
    $userName=getUserName(session_id());
    $sentencia=$base->prepare($sql);
    $sentencia->bindParam(':user',$userName);
    $sentencia->execute();

    $results=$sentencia->fetchAll();

    $estado="";
    foreach ($results as $value) {
        $estado=$value['status'];

    }

    $GLOBALS['status'] = "Status was recovery successfully";

    return $estado;

}

// PASSWORDs
// Functions to recovery passwords
function recoveryPassword($user, $email){
    //BOOLEAN
    $go=false;
    //Get the temporary password
    $tmpPass=generateTemporalPass();
    $asunt="Recuperacion de contraseña";
    $message="Hola $user, \n Has solicitado recuperar tu contraseña. Si no has sido tú, 
    por seguridad la hemos cambiado, sigue los siguientes pasos para poder cambiarla 
    y poner la que quieras. \n En caso de haber sido tú sigue los mismos pasos. 
    Tu nueva contraseña temporal es: <span class='pass'>tmpPass</span> .\n \n Te aconsejamos que la cambies lo antes posible. \n
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
                height: max-content;
                margin: 0 auto;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        <main>
            <h1>MEMEOLOGIA.COM</h1>
            <h2>Recuperación de Contraseña</h2>
            <div class="content">'.
                $message.'
            </div>
        </main>
    </body>
    </html>
    ';

    //Now sent email to user 
    if(mail($email, $asunt, $content)){
        $go=true;
    }else{
        $go=false;
    }

    //Now we need to set the password and sent an email to user
    $base = getConnection();
    $sql="UPDATE users SET pass=:tmpPass WHERE user=:user and email=:email";
    $sentencia= $base->prepare($sql);
    $sentencia->bindParam(':user',$user);
    $sentencia->bindParam(':email',$email);
    $sentencia->bindParam(':pass',$tmpPass);
    $sentencia->execute();

    
    return $go;
}

// Function to generate new Password to sent email to user
function generateTemporalPass(){
    $pass=sha1(generatePass());
    return $pass;
}




//Functions to get data from users by other users

//Function to get follows
function getFollow(){


}

//Function to get followers
function getFollowers(){


}

//Function to get number of posts
function getNumberPosts(){


}

//Function to get likes
function getLikesUser(){


}



// FUNCTIONS TO ACCESS AND ADMIN THE BACK-OFFICE 
//Function to generate admin password
function generatePass(){
    $dataArray=array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M",
    "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "a", "b", "c", 
    "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", 
    "t", "u", "v", "w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8", 
    "9");
    //Password
    $passwordArray=array();

    for($i=0; $i<20; $i++){
        array_push($passwordArray, $dataArray[rand(0, 61)]);
    }

    $password=implode($passwordArray);

    $GLOBALS['status'] = "Password was generated successfully";

    return $password;
}


//Function to register new admin 
function setAdminPass($userAdmin){
    //Importants vars 
    $mail="alvarochavas1994@gmail.com";
    $asunt="Contraseña para $userAdmin";
    //New password 
    $pass=generatePass();

    $base = getConnection();
    $sql="UPDATE admins SET password=:pass WHERE user=:userAdmin";
    $sentencia= $base->prepare($sql);
    $sentencia->bindParam(':userAdmin',$userAdmin);
    $sentencia->bindParam(':pass',$pass);
    $sentencia->execute();

    $message="La contraseña actual de $userAdmin es: ".$pass;

    //Sent email to administrador 
    mail($mail, $asunt, $message);

    $GLOBALS['status'] = "Admin password has been registered and sent";
}

































?>