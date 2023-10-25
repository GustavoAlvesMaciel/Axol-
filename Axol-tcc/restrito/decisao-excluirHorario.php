<?php

    require_once('../model/Horario.php');
    header("Location: horario-restrita.php");

    $linha = $_POST['linha'];

    $horario = new Horario();

    $horario->deletar($linha);
   
?>