<?php

    require_once('../model/Comentario.php');

    header("Location: comentario-restrita.php");

    $linha = $_POST['linha'];

    $comentario = new Comentario();
    
    $comentario->deletar($linha);
    
?>