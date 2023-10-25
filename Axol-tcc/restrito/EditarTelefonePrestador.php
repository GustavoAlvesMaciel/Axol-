<?php



require_once("../model/TelefonePrestador.php");
require_once("decisao-editarTelefonePrestador.php");

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
        $stmt = $conexao -> prepare ("update tbTelefonePrestadorServico inner join tbPrestadorServico on tbTelefonePrestadorServico.codPrestadorServico = tbPrestadorServico.codPrestadorServico set numeroTelefonePrestadorServico='$numero', tbPrestadorServico.codPrestadorServico='$cod' where tbPrestadorServico.emailPrestadorServico like '%$_SESSION[email]%'");
        $stmt -> execute();
        
        
        
        // echo "<script> alert ('Dados alterados com sucesso'); </script>";
        echo "<script> window.location = 'nav-restrita.php'</script>";
        }
        catch(PDOException $e){
         echo"Erro " . $e -> getMessage();
        
         
        }
        
?>