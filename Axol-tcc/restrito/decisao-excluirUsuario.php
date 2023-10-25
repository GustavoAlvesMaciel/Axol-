<?php

    require_once('../model/Usuario.php');
    require_once('../model/TelefoneUsuario.php'); //FK
    require_once('../model/Comentario.php'); //FK
    header("Location: usuario-restrita.php");

    $linha = $_POST['linha'];

    $usuario = new Usuario();
    $telefoneUsuario = new TelefoneUsuario(); //FK
    $comentario = new Comentario(); //FK

    $usuario->deletar($linha);
    $telefoneUsuario->deletarUsuario($linha); //FK... o deletarUsuario é da função do model
    $comentario->deletarUsuario($linha); //FK

?>