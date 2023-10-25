<?php 

    require_once("../model/PrestadorServico.php");

    $dadosXls = "";
    $dadosXls .= " <table border='1' >";
    $dadosXls .= " <tr>";
    $dadosXls .= " <th>Cod</th>";
    $dadosXls .= " <th>Nome</th>";
    $dadosXls .= " <th>CNPJ</th>";
    $dadosXls .= " <th>Email</th>";
    $dadosXls .= " <th>Senha</th>";
    $dadosXls .= " <th>Img</th>";
    $dadosXls .= " <th>Logradouro</th>";
    $dadosXls .= " <th>Complemento</th>";
    $dadosXls .= " <th>CEP</th>";
    $dadosXls .= " <th>Bairro</th>";
    $dadosXls .= " <th>Cidade</th>";
    $dadosXls .= " </tr>";

    $prestadorServico = new PrestadorServico();
    $listaPrestador = $prestadorServico->listar();

    foreach ($listaPrestador as $listar) {
    $dadosXls .= " <tr>";
    $dadosXls .= " <td>" . $listar['codPrestadorServico'] . "</td>";
    $dadosXls .= " <td>" . $listar['nomePrestadorServico'] . "</td>";
    $dadosXls .= " <td>" . $listar['cnpjPrestadorServico'] . "</td>";
    $dadosXls .= " <td>" . $listar['emailPrestadorServico'] . "</td>";
    $dadosXls .= " <td>" . $listar['senhaPrestadorServico'] . "</td>";
    $dadosXls .= " <td>" . $listar['imgPrestadorServico'] . "</td>";
    $dadosXls .= " <td>" . $listar['logradouroPrestadorServico'] . "</td>";
    $dadosXls .= " <td>" . $listar['complementoPrestadorServico'] . "</td>";
    $dadosXls .= " <td>" . $listar['cepPrestadorServico'] . "</td>";
    $dadosXls .= " <td>" . $listar['bairroPrestadorServico'] . "</td>";
    $dadosXls .= " <td>" . $listar['cidadePrestadorServico'] . "</td>";
    $dadosXls .= " </tr>";
    }
    $dadosXls .= " </table>";
    $arquivo = "Lista-de-prestadores.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $arquivo . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    echo $dadosXls;
    exit;
?>