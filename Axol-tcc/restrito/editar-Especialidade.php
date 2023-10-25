<?php

header("Location: especialidade-restrita.php");

require_once("../model/Especialidade.php");
require_once("decisao-editarEspecialidade.php");

    $especialidade = new Especialidade();

    $nome = $_POST['nomeEditar']; //nomeEspecialidade
    $especie = $_POST['especieEditar']; //Especie Especialidade
    $cod = $_POST['codEditar']; 
    $linha = $_POST['linha'];

    $especialidade->alterar($linha, $nome, $especie, $cod);

?>