<?php
    require "functions.php";
    session_start();
    $id_session = session_id();
    resetProfile(getUsername($id_session));
    header("Location:../inside/principal.php");
?>