<?php
    require "functions.php";
    session_start();
    if(session_status() == 2){
        $id_session=session_id();
        destroySession($id_session);
        session_destroy();
        header("location: ../index.php");
    }
?>