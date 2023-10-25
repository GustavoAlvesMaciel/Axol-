<?php 

    require_once("../model/Usuario.php");

    $dadosXls = "";
    $dadosXls .= " <table border='1' >";
    $dadosXls .= " <tr>";
    $dadosXls .= " <th>Cod</th>";
    $dadosXls .= " <th>Nome</th>";
    $dadosXls .= " <th>Data Nasc</th>";
    $dadosXls .= " <th>Sexo</th>";
    $dadosXls .= " <th>CPF</th>";
    $dadosXls .= " <th>Email</th>";
    $dadosXls .= " <th>Senha</th>";
    $dadosXls .= " <th>Imagem</th>";
    $dadosXls .= " <th>Logradouro</th>";
    $dadosXls .= " <th>Complemento</th>";
    $dadosXls .= " <th>CEP</th>";
    $dadosXls .= " <th>Bairro</th>";
    $dadosXls .= " <th>Cidade</th>";
    $dadosXls .= " </tr>";

    $usuario = new Usuario();
    $listaUsuario = $usuario->listar();

    foreach ($listaUsuario as $listar) {
    $dadosXls .= " <tr>";
    $dadosXls .= " <td>" . $listar['codUsuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['nomeUsuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['dataNascUsuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['sexoUsuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['cpfUsuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['emailUsuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['senhaUsuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['imagemUsuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['logradouroUsuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['complementoUsuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['cepUsuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['bairroUsuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['cidadeUsuario'] . "</td>";
    $dadosXls .= " </tr>";
    }
    $dadosXls .= " </table>";
    $arquivo = "Lista-de-usuarios.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $arquivo . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    echo $dadosXls;
    exit;
?>