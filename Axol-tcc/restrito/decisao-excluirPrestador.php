<?php

    require_once('../model/PrestadorServico.php');
    require_once('../model/Animais.php'); //FK
    require_once('../model/Horario.php'); //FK
    require_once('../model/Postagem.php'); //FK
    require_once('../model/TelefonePrestador.php'); //FK
    require_once('../model/EspecialidadeServico.php'); //FK
    

    header("Location: prestador-restrita.php");

    $linha = $_POST['linha'];

    $prestadorServico = new PrestadorServico();
    // $animais = new Animais(); //FK
    $horario = new Horario(); //FK
    $postagem = new Postagem(); //FK
    $telefonePrestador = new TelefonePrestador(); //FK
    // $especialidadeServico = new EspecialidadeServico(); //FK


    $prestadorServico->deletar($linha);
    $animais->deletarPrestador($linha); //FK
    $horario->deletarPrestador($linha); //FK 
    $postagem->deletarPrestador($linha); //FK
    $telefonePrestador->deletarPrestador($linha); //FK
    $especialidadeServico->deletarPrestador($linha); //FK

?>