<?php 

    require_once("../model/Postagem.php");

    $dadosXls = "";
    $dadosXls .= " <table border='1' >";
    $dadosXls .= " <tr>";
    $dadosXls .= " <th>Cod</th>";
    $dadosXls .= " <th>Curtidas</th>";
    $dadosXls .= " <th>Descrição</th>";
    $dadosXls .= " <th>Nome Prestador</th>";
    $dadosXls .= " </tr>";

    $postagem = new Postagem();
    $listaPostagem = $postagem->listar();

    foreach ($listaPostagem as $listar) {
    $dadosXls .= " <tr>";
    $dadosXls .= " <td>" . $listar['codPostagem'] . "</td>";
    $dadosXls .= " <td>" . $listar['curtidaPostagem'] . "</td>";
    $dadosXls .= " <td>" . $listar['descricaoPostagem'] . "</td>";
    $dadosXls .= " <td>" . $listar['nomePrestadorServico'] . "</td>";
    $dadosXls .= " </tr>";

    }

    $dadosXls .= " </table>";
    $arquivo = "Lista-de-postagens.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $arquivo . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    echo $dadosXls;
    exit;
?>