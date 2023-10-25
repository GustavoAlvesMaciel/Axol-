<?php

header("Location: comentario-restrita.php");

require_once("../model/Comentario.php");
require_once("decisao-editarComentario.php");

    $comentario = new Comentario();

    $descricao = $_POST['descricaoEditar']; //vindo do arquivo decisao-editarComentario 
    $cod = $_POST['codEditar']; 
    $codP = $_POST['codEditarP']; 
    $linha = $_POST['linha'];

    $comentario->alterar($linha, $descricao, $cod, $codP);

?>