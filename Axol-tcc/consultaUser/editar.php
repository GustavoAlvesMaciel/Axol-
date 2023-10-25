<?php 

//ESSE JÁ TÁ EDITADO PRO MEU 

// Incluir a conexao com o banco de dados
include_once "../model/Conexao.php";

// Receber os dados
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// validar o formulario
if (empty($dados['nomeUsuario'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo nome!</div>"];
} elseif (empty($dados['dataNascUsuario'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo e-mail!</div>"];
} elseif (empty($dados['sexoUsuario'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo e-mail!</div>"];
} elseif (empty($dados['cpfUsuario'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo e-mail!</div>"];
} elseif (empty($dados['emailUsuario'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo e-mail!</div>"];
} elseif (empty($dados['senhaUsuario'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo e-mail!</div>"];
} elseif (empty($dados['imagemUsuario'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo e-mail!</div>"];
} elseif (empty($dados['logradouroUsuario'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo e-mail!</div>"];
} elseif (empty($dados['complementoUsuario'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo e-mail!</div>"];
} elseif (empty($dados['cepUsuario'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo e-mail!</div>"];
} elseif (empty($dados['bairroUsuario'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo e-mail!</div>"];
} elseif (empty($dados['cidadeUsuario'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo e-mail!</div>"];
} elseif (empty($dados['numeroTelefoneUsuario'])) {
    $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo número!</div>"];
} else {
    // Editar no BD na primeira tabela
    $query_usuario = "UPDATE tbUsuario SET nomeUsuario=:nomeUsuario, dataNascUsuario=:dataNascUsuario, sexoUsuario=:sexoUsuario,
    cepfUsuario=:cpfUsuario, emailUsuario=:emailUsuario, senhaUsuario=:senhaUsuario, imagemUsuario=:imagemUsuario,
    logradouroUsuario=:logradouroUsuario, complementoUsuario=:complementoUsuario, cepUsuario=:cepUsuario,
    bairroUsuario=:bairroUsuario, cidadeUsuario=:cidadeUsuario  WHERE codUsuario=:codUsuario";
    $edit_usuario = $conn->prepare($query_usuario);
    $edit_usuario->bindParam(':nome', $dados['nome']);
    $edit_usuario->bindParam(':dataNascUsuario', $dados['dataNascUsuario']);
    $edit_usuario->bindParam(':sexoUsuario', $dados['sexoUsuario']);
    $edit_usuario->bindParam(':cpfUsuario', $dados['cpfUsuario']);
    $edit_usuario->bindParam(':emailUsuario', $dados['emailUsuario']);
    $edit_usuario->bindParam(':senhaUsuario', $dados['senhaUsuario']);
    $edit_usuario->bindParam(':imagemUsuario', $dados['imagemUsuario']);
    $edit_usuario->bindParam(':logradouroUsuario', $dados['logradouroUsuario']);
    $edit_usuario->bindParam(':complementoUsuario', $dados['complementoUsuario']);
    $edit_usuario->bindParam(':cepUsuario', $dados['cepUsuario']);
    $edit_usuario->bindParam(':bairroUsuario', $dados['bairroUsuario']);
    $edit_usuario->bindParam(':cidadeUsuario', $dados['cidadeUsuario']);
    $edit_usuario->bindParam(':codUsuario', $dados['codUsuario']);

    // Verificar se editou o usuario
    if ($edit_usuario->execute()) {

        // Editar no BD na segunda tabela
        $query_endereco = "UPDATE tbTelefoneUsuario SET numeroTelefoneUsuario WHERE codUsuario=:codUsuario";
        $edit_endereco = $conn->prepare($query_endereco);
        $edit_endereco->bindParam(':numeroTelefoneUsuario', $dados['numeroTelefoneUsuario']);
        $edit_endereco->bindParam(':codUsuario', $dados['id']);

        // Verificar se editou o endereco
        if ($edit_endereco->execute()) {
            $retorna = ['status' => true, 'msg' => "<div class='alert alert-success' role='alert'>Usuário editado com sucesso!</div>"];
        } else {
            $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Usuário não editado com sucesso!</div>"];
        }
    } else {
        $retorna = ['status' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Usuário não editado com sucesso!</div>"];
    }
}

echo json_encode($retorna);