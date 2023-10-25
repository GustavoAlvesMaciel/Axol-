<?php

header("Location: form-especialidade.php");
header("Location: cadastra-telefonePrestador.php");

session_start(); //---

require_once("../model/TelefonePrestador.php");
require_once("../model/PrestadorServico.php");

$telefoneprestador = new TelefonePrestador();
$prestadorServico = new PrestadorServico();


$listagemEspec = $prestadorServico->listarEspecifico($_SESSION['email']); //---

foreach($listagemEspec as $listar){
    $id = $listar['codPrestadorServico'];
}



$telefoneprestador->setNumeroTelefonePrestadorServico($_SESSION['telefone'] = $_POST['txtTelefonePrestadorServico']); //---
;

$telefoneprestador->setPrestadorServico($id);

$telefoneprestador->cadastrar($telefoneprestador);

//VALIDANDO TELEFONE PRESTADOR
    $numeroTelefonePrestadorServico = trim(str_replace('/', '', str_replace(' ', '', str_replace('-', '', str_replace(')', '', str_replace('(', '', $numeroTelefonePrestadorServico))))));

    $lenValor = strlen($numeroTelefonePrestadorServico);

    $regexCel = '/[0-9]{2}[6789][0-9]{3,4}[0-9]{4}/'; // Regex para validar somente celular
    if (!preg_match($regexCel, $numeroTelefonePrestadorServico)) {
            header("Location: ../restrito/form-prestador.php");
        return false;

    }

        if($numeroTelefonePrestadorServico[0] == "0" || $numeroTelefonePrestadorServico[2] == "0"){ //DD e número de telefone não podem começar com zero.
            header("Location: ../restrito/form-telefonePrestador.php");
        return false;

    }
    
    //validando a quantidade de caracteres de telefone fixo ou celular.
    if($lenValor != 10 && $lenValor != 11){
        header("Location: ../restrito/form-telefonePrestador.php");
        return false;
    }


?>