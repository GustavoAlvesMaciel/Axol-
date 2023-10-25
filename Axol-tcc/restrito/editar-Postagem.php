<?php

header("Location: postagem-restrita.php");

require_once("../model/Postagem.php");
require_once("decisao-editarPostagem.php");

    $postagem = new Postagem();

    $data = $_POST['dataEditar']; 
    $titulo = $_POST['tituloEditar']; //Vem do arquivo decisao-editarPostagem
    $descricao = $_POST['descricaoEditar']; 
    $imgPostagem = $_POST['imgPostagem'];
    $cod = $_POST['codEditar']; //FK prestador servico
    $linha = $_POST['linha'];

    $postagem->alterar($linha, $data, $titulo, $descricao, $imgPostagem, $cod);

?>