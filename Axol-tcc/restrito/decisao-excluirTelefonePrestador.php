<?php

    require_once('../model/TelefonePrestador.php');

    header("Location: telefoneprestador-restrita.php");

    $linha = $_POST['linha'];

    $telefonePrestador = new TelefonePrestador();
   
    $telefonePrestador->deletar($linha);


?>