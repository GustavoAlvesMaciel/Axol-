<?php

header("Location: telefoneprestador-restrita.php");

require_once("../model/TelefonePrestador.php");
require_once("decisao-editarTelefonePrestador.php");

    $telefonePrestador = new TelefonePrestador();

    $numero = $_POST['numeroEditar']; 
    $cod = $_POST['codEditar']; 
    $linha = $_POST['linha'];

    $telefonePrestador->alterar($linha, $numero, $cod);

?>