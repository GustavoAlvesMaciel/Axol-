<?php

    if((!isset($_SESSION['autorizacao'])==true)){
        unset($_SESSION['autorizacao']);
        session_destroy();
        header("Location: ../entrar.php");
    }
?>