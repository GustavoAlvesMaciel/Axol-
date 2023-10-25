<?php

header("Location: prestador-restrita.php");

require_once("../model/PrestadorServico.php");
require_once("decisao-editarPrestador.php");

    $prestadorServico = new PrestadorServico();

    $nome = $_POST['nomeEditar']; 
    $cnpj = $_POST['cnpjEditar'];
    $email = $_POST['emailEditar'];
    $senha = $_POST['senhaEditar'];
    $img = $_POST['imgEditar'];
    $logradouro = $_POST['logradouroEditar'];
    $complemento = $_POST['complementoEditar'];
    $cep = $_POST['cepEditar'];
    $bairro = $_POST['bairroEditar'];
    $cidade = $_POST['cidadeEditar'];
    $uf = $_POST['ufEditar'];//NOVO

    $linha = $_POST['linha'];

    $prestadorServico->alterar($linha, $nome, $cnpj, $email, $senha, $img, $logradouro, $complemento, $cep, $bairro, $cidade, $uf);

?>