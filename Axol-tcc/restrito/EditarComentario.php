<?php

require_once("../model/Especialidade.php");
require_once("decisao-editarComentario.php");

    $especialidade = new Especialidade();


    try
    {
        $conexao = new PDO("mysql:host=localhost;
        dbname=atualizadotcc", 
        "root",
        "");
    }
    catch(PDOException $e)
    {
        throw new PDOException($e);
    } 
    


    $nome = $_POST['nomeEditar']; //nomeEspecialidade
    $especie = $_POST['especieEditar']; //Especie Especialidade
    $cod = $_POST['codEditar']; 
    


    try{
        $conexao = Conexao::conectar();
        $stmt = $conexao -> prepare ("update tbComentario INNER JOIN tbUsuario on tbComentario.codUsuario = tbUsuario.codUsuario
                                      INNER JOIN tbPostagem on tbComentario.codPostagem = tbPostagem.codPostagem
                                      set nomeEspecialidade='$nome', especieEspecialidade='$especie',  tbPrestadorServico.codPrestadorServico='$cod' 
                                      where tbUsuario.emailUsuario like '%$_SESSION[email]%'");
        $stmt -> execute();
        
        
        
        // echo "<script> alert ('Dados alterados com sucesso'); </script>";
        echo "<script> window.location = 'PerfilUser.php'</script>";
        }
        catch(PDOException $e){
         echo"Erro " . $e -> getMessage();
        
         
        }
        

?>

