<?php

    require_once('../model/Especialidade.php');
    require_once('../model/EspecialidadeServico.php');

    header("Location: especialidade-restrita.php");

    $linha = $_POST['linha'];

    $especialidade = new Especialidade();
    $especialidadeServico = new EspecialidadeServico();

    $especialidade->deletar($linha);
    $especialidadeServico->deletarEspecialidade($linha);
?>