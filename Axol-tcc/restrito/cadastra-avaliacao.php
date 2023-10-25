<?php
require_once("../model/Conexao.php");
require_once("../model/PrestadorServico.php");
require_once("../model/Usuario.php");
require_once("../model/avaliacao.php");
require_once("../restrito/estrelas.php");

    $avaliacao = new Avaliacao();
    $prestadorServico = new PrestadorServico();
    $usuario = new Usuario();


    $avaliacao->setQuantAvaliacao($_POST['estrela']);
    $usuario->setCodUsuario($_POST['Usuario']);
    $prestadorServico->setCodPrestadorServico($_POST['PrestadorServico']);
    $avaliacao->setUsuario($usuario);
    $avaliacao->setPrestadorServico($prestadorServico);

    $avaliacao->cadastrar($avaliacao);


?>


   
