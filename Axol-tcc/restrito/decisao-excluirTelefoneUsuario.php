<?php

    require_once('../model/TelefoneUsuario.php');
    header("Location: telefoneusuario-restrita.php");

    $linha = $_POST['linha'];

    $telefoneUsuario = new TelefoneUsuario();

    $telefoneUsuario->deletar($linha);

?>