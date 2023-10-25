<?php 

    require_once("../model/Especialidade.php");

    $dadosXls = "";
    $dadosXls .= " <table border='1' >";
    $dadosXls .= " <tr>";
    $dadosXls .= " <th>Cod</th>";
    $dadosXls .= " <th>Nome Especialidade</th>";
    $dadosXls .= " <th>Especie Especialidade</th>";
    $dadosXls .= " <th>Cod Especialidade Servico</th>";
    $dadosXls .= " </tr>";

    $especialidade = new Especialidade();
    $listaEspecialidade = $especialidade->listar();

    foreach ($listaEspecialidade as $listar) {
    $dadosXls .= " <tr>";
    $dadosXls .= " <td>" . $listar['codEspecialidade'] . "</td>";
    $dadosXls .= " <td>" . $listar['nomeEspecialidade'] . "</td>";
    $dadosXls .= " <td>" . $listar['especieEspecialidade'] . "</td>";
    $dadosXls .= " <td>" . $listar['especieEspecialidade'] . "</td>";
    $dadosXls .= " <td>" . $listar['codEspecialidadeServico'] . "</td>";
    $dadosXls .= " </tr>";

    }

    $dadosXls .= " </table>";
    $arquivo = "Lista-de-especialidades.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $arquivo . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    echo $dadosXls;
    exit;
?>