<?php

header("Location: ../selectLogin.html");
session_start(); //---INICIA A SESSION, SEM ELE NÃO PEGA O codPestador, TEM QUE ESTAR EM PRIMEIRO
require_once("../model/Horario.php");
require_once("../model/PrestadorServico.php");//FK

    $horario = new Horario();
    $prestadorServico = new PrestadorServico();


    $listagemEspec = $prestadorServico->listarEspecifico($_SESSION['email']); //---

    foreach($listagemEspec as $listar){
        $id = $listar['codPrestadorServico'];
    }
    

    $horario->setDiaSemanaHorario($_SESSION['dia'] = implode(",",$_POST['data']));
    $horario->setAberturaHorario($_SESSION['abertura'] = $_POST['txtAberturaHorario']);
    $horario->setFechamentoHorario($_SESSION['fechamento'] = $_POST['txtFechamentoHorario']);

    $horario->setPrestadorServico($id);
    
    
    // $diaSemanaHorario = $_POST['txtDiaSemanaHorario'];
    // $datas=$_POST['data'];
    // $asData=implode(",",$datas);

    // $asData=implode(",",$_POST['data']);
    // $aberturaHorario = $_POST['txtAberturaHorario'];
    // $fechamentoHorario = $_POST['txtFechamentoHorario'];
    
    // $prestadorServico->setCodPrestadorServico($_POST['prestadorServico']); //FK
    // $horario->setPrestadorServico($prestadorServico); //FK

    // $horario->setDiaSemanaHorario($asData);
    // $horario->setAberturaHorario($aberturaHorario);
    // $horario->setFechamentoHorario($fechamentoHorario);
   





    $horario->cadastrar($horario);

?>