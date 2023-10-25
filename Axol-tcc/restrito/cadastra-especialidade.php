<?php
header("Location: form-horario.php");

session_start();

require_once("../model/Especialidade.php");
require_once("../model/PrestadorServico.php");

    $especialidade = new Especialidade();
    $prestadorServico = new PrestadorServico();

    $listagemEspec = $prestadorServico->listarEspecifico($_SESSION['email']); //---

    foreach($listagemEspec as $listar){
        $id = $listar['codPrestadorServico'];
    }
    

    $especialidade->setNomeEspecialidade($_SESSION['especialidade'] = implode(",",$_POST['especiali']));

    $especialidade->setEspecieEspecialidade($_SESSION['especie']=  implode(",",$_POST['espe']));
    
    $especialidade->setPrestadorServico($id);

    $especialidade->cadastrar($especialidade);



?>