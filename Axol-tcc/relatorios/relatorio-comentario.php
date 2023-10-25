<?php 

    require_once("../model/Comentario.php");

    $dadosXls = "";
    $dadosXls .= " <table border='1' >";
    $dadosXls .= " <tr>";
    $dadosXls .= " <th>Cod</th>";
    $dadosXls .= " <th>Descrição</th>";
    $dadosXls .= " <th>Cod Usuario</th>";
    $dadosXls .= " <th>Cod Postagem</th>";
    $dadosXls .= " </tr>";

    $comentario = new Comentario();
    $listaComentario = $comentario->listar();

    foreach ($listaComentario as $listar) {
    $dadosXls .= " <tr>";
    $dadosXls .= " <td>" . $listar['codComentario'] . "</td>";
    $dadosXls .= " <td>" . $listar['descricaoComentario'] . "</td>";
    $dadosXls .= " <td>" . $listar['nomeUsuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['descricaoPostagem'] . "</td>";
    $dadosXls .= " </tr>";

    }

    $dadosXls .= " </table>";
    $arquivo = "Lista-de-comentario.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $arquivo . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    echo $dadosXls;
    exit;
?>