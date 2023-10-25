<?php

require_once('global.php');


require_once("../model/PrestadorServico.php");

try {
  $prestadorServico = new PrestadorServico();

  
  $listaprestadorservico = $prestadorServico->listar();

} catch (Exception $e) {
  echo $e->getMessage();
}

// PESQUISA 
$conexao = Conexao::conectar();
$have_condition = false;
$pesquisa = '';

//Criação e verificação de váriaveis

if (isset($_GET['nomePrestadorServico'])) {
    if ($_GET['nomePrestadorServico'] != "" && $_GET['nomePrestadorServico'] != "0") {
        $nomePrestadorServico = $_GET['nomePrestadorServico'];
        $temp =  $conexao = Conexao::conectar();
        $temp = $temp->prepare("SELECT nomePrestadorServico FROM tbprestadorservico WHERE nomePrestadorServico = $nomePrestadorServico");
        $temp->execute();
        $categoryName = $temp->fetch(PDO::FETCH_ASSOC);
        $pesquisa .= "(" . $categoryName['nomePrestadorServico'] . ") ";
    } else {
        $nomePrestadorServico = "0";
        $pesquisa .= "(Todas as categorias) ";
    }
} else {
    $nomePrestadorServico = "0";
    $pesquisa .= "(Todas as categorias) ";
}


