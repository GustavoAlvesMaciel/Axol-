<?php

header("Location: ../loginUser/entrar-user.php"); //--
session_start(); //--

require_once("../model/TelefoneUsuario.php");
require_once("../model/Usuario.php"); //FK

    $telefoneUsuario = new TelefoneUsuario();
    $usuario = new Usuario();

    $listagemEspec = $usuario->listarEspecifico($_SESSION['email']); //---

        foreach($listagemEspec as $listar){ //---
            $id = $listar['codUsuario'];
        }

    $telefoneUsuario->setNumeroTelefoneUsuario($_SESSION['telefone']); //---

    $telefoneUsuario->setUsuario($id);

    $telefoneUsuario->cadastrar($telefoneUsuario);

    //VALIDANDO TELEFONE USUÁRIO
    $numeroTelefoneUsuario = trim(str_replace('/', '', str_replace(' ', '', str_replace('-', '', str_replace(')', '', str_replace('(', '', $numeroTelefoneUsuario))))));

    $lenValor = strlen($numeroTelefoneUsuario);

    $regexCel = '/[0-9]{2}[6789][0-9]{3,4}[0-9]{4}/'; // Regex para validar somente celular
    if (!preg_match($regexCel, $numeroTelefoneUsuario)) {
            header("Location: ../restrito/form-user.php");
        return false;

    }

        if($numeroTelefoneUsuario[0] == "0" || $numeroTelefoneUsuario[2] == "0"){ //DD e número de telefone não podem começar com zero.
            header("Location: ../restrito/form-user.php");
        return false;

    }
    
    //validando a quantidade de caracteres de telefone fixo ou celular.
    if($lenValor != 10 && $lenValor != 11){
        header("Location: ../restrito/form-user.php");
        return false;
    }

?>

