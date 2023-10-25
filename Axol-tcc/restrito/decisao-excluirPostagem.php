<?php

    require_once('../model/Postagem.php');
    require_once('../model/Comentario.php'); //FK

    header("Location: postagem-restrita.php");

    $linha = $_POST['linha'];

    $postagem = new Postagem();
    $comentario = new Comentario(); //FK

    $postagem->deletar($linha);
    $comentario->deletarPostagem($linha); //FK  o deletarUsuario é da função do model COMENTÁRIO

?>