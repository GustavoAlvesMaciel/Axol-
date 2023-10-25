<?php 

    require_once("../model/Horario.php");

    $dadosXls = "";
    $dadosXls .= " <table border='1' >";
    $dadosXls .= " <tr>";
    $dadosXls .= " <th>Cod</th>";
    $dadosXls .= " <th>Dias</th>";
    $dadosXls .= " <th>Abertura</th>";
    $dadosXls .= " <th>Fechamento</th>";
    $dadosXls .= " <th>Nome Prestador</th>";
    $dadosXls .= " </tr>";

    $horario = new Horario();
    $listaHorario = $horario->listar();

    foreach ($listaHorario as $listar) {
    $dadosXls .= " <tr>";
    $dadosXls .= " <td>" . $listar['codHorario'] . "</td>";
    $dadosXls .= " <td>" . $listar['diaSemanaHorario'] . "</td>";
    $dadosXls .= " <td>" . $listar['aberturaHorario'] . "</td>";
    $dadosXls .= " <td>" . $listar['fechamentoHorario'] . "</td>";
    $dadosXls .= " <td>" . $listar['nomePrestadorServico'] . "</td>";
    $dadosXls .= " </tr>";

    }

    $dadosXls .= " </table>";
    $arquivo = "Lista-de-horarios.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $arquivo . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    echo $dadosXls;
    exit;
?>