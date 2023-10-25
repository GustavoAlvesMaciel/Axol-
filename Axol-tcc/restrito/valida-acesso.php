<?php

    session_start(); //inicinado sessão

    include('../model/Conexao.php'); 

    //recuperação dos valores digitados no formulário 
    $login = $_POST['txtLogin']; //Vem do form do entrar.php
    $senha = $_POST['txtSenha']; //Vem do form do entrar.php

    
    //variáveis para verificação com o banco de dados
    $emailBanco = ''; //variaveis vazias
    $senhaBanco = ''; //variaveis vazias

    try {
        $conexao = Conexao::conectar();//coloquei para sumir o erro
        $stmt = $conexao->prepare("SELECT emailPrestadorServico, senhaPrestadorServico FROM tbprestadorservico WHERE emailPrestadorServico = '$login' AND senhaPrestadorServico = '$senha'");
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_BOTH)){
           $emailBanco = $row['emailPrestadorServico'];
           $senhaBanco = $row['senhaPrestadorServico'];

        }

    }

    catch(PDOException $e){
        $e->getMessage();
    }


    //verificação para autenticação
    if($login == $emailBanco && $senha == $senhaBanco){

        $_SESSION['autorizacao'] = true;
        header("Location: nav-restrita.php"); //redirecionar para a dashboard
        $_SESSION['email'] = $login;  // salvar o email de quem logou para filtrar no crud
        $_SESSION['senha'] = $senha;
       
    
    }else{

        $_SESSION['autorizacao'] = false;
        unset( $_SESSION['autorizacao']); //limpar minha sessão
        session_destroy(); //destruir sessão
        header("Location: ../entrar.php"); //para redirecionar para form de login
        
    }

?>