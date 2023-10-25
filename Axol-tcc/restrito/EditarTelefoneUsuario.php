<?php
session_start();
require_once("../model/TelefonePrestador.php");
require_once("decisao-editarTelefoneUsuario.php");

    $telefonePrestador = new TelefonePrestador();
    global $conexao;

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
    
    
    $numero = $_POST['numeroEditar']; 
    $cod = $_POST['codEditar']; 


    try{
        $conexao = Conexao::conectar();
        $stmt = $conexao -> prepare ("update tbTelefoneUsuario inner join tbUsuario on tbTelefoneUsuario.codUsuario = tbUsuario.codUsuario set numeroTelefoneUsuario='$numero', tbUsuario.codUsuario='$cod'
                                      where tbUsuario.emailUsuario like '%$_SESSION[emailUser]%'");
        $stmt -> execute();
        
        
        
        // echo "<script> alert ('Dados alterados com sucesso'); </script>";
        echo "<script> window.location = 'porfile.php'</script>";
        }
        catch(PDOException $e){
         echo"Erro " . $e -> getMessage();
         
         
        }
        
?>