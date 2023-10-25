<?php

header("Location: usuario-restrita.php");

require_once("../model/Usuario.php");
require_once("decisao-editarUsuario.php");

    $usuario = new Usuario();

    $nome = $_POST['nomeEditar']; 
    $data = $_POST['dataEditar'];
    $sexo = $_POST['sexoEditar']; 
    $cpf = $_POST['cpfEditar'];
    $email = $_POST['emailEditar']; 
    $senha = $_POST['senhaEditar'];
    $imagem = $_POST['imagemEditar'];  //DÚVIDA NESSA, PERGUNTAR PRA DAVI
    $logradouro = $_POST['logradouroEditar'];
    $complemento = $_POST['complementoEditar']; 
    $cep = $_POST['cepEditar'];
    $bairro = $_POST['bairroEditar']; 
    $cidade = $_POST['cidadeEditar'];
    $uf = $_POST['ufEditar'];
    $linha = $_POST['linha'];

    $usuario->alterar($linha, $nome, $data, $sexo, $cpf, $email, $senha, $imagem, $logradouro, $complemento, $cep, $bairro, $cidade, $uf);

?>