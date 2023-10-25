<?php

    session_start(); //inicinado sessão

    include('../model/Conexao.php'); 

    //recuperação dos valores digitados no formulário 
    $login = $_POST['txtLoginUser']; //Vem do form do entrar.php
    $senha = $_POST['txtSenhaUser']; //Vem do form do entrar.php

    
    //variáveis para verificação com o banco de dados
    $emailBanco = ''; //variaveis vazias
    $senhaBanco = ''; //variaveis vazias

    try {
        $conexao = Conexao::conectar();//coloquei para sumir o erro
        $stmt = $conexao->prepare("SELECT emailUsuario, senhaUsuario FROM tbusuario WHERE emailUsuario = '$login' AND senhaUsuario = '$senha'");
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){
           $emailBanco = $row['emailUsuario'];
           $senhaBanco = $row['senhaUsuario'];

        }

    } 

    catch(PDOException $e){
        $e->getMessage();
    }


    //verificação para autenticação
    if($login == $emailBanco && $senha == $senhaBanco){

        $_SESSION['autorizacao'] = true;
        header("Location: ../restrito/porfile.php"); //redirecionar para a dashboard do usuario
        $_SESSION['emailUser'] = $login;  // salvar o email de quem logou para filtrar no crud
        $_SESSION['senhaUser'] = $senha;
    
    }else{

        $_SESSION['autorizacao'] = false;
        unset( $_SESSION['autorizacao']); //limpar minha sessão
        session_destroy(); //destruir sessão
        header("Location: entrar-user.php"); //para redirecionar para form de login
        
    }

?>