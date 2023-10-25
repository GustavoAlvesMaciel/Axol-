<?php

header("Location: horario-restrita.php");

require_once("../model/Horario.php");
require_once("decisao-editarHorario.php");

    $horario = new Horario();

    // $dia = $_POST['diaEditar']; //vindo do arquivo decisao-editarHorario 
    $datas=$_POST['data'];
    $asData=implode(",",$datas);
    $abertura = $_POST['aberturaEditar'];
    $fechamento = $_POST['fechamentoEditar'];
    $cod = $_POST['codEditar']; //FK prestador servico
    $linha = $_POST['linha'];

    $horario->alterar($linha, $asData, $abertura, $fechamento, $cod);

?>