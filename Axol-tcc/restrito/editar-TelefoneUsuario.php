<?php

header("Location: telefoneusuario-restrita.php");

require_once("../model/TelefoneUsuario.php");
require_once("decisao-editarTelefoneUsuario.php");

    $telefoneUsuario = new TelefoneUsuario();

    $numero = $_POST['numeroEditar'];  //vindo do arquivo decisao-editarComentario 
    $cod = $_POST['codEditar']; 
    $linha = $_POST['linha'];

    $telefoneUsuario->alterar($linha, $numero, $cod);

?>