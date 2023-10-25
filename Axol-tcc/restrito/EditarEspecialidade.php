<?php

require_once("../model/Especialidade.php");
require_once("decisao-editarEspecialidade.php");

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
    

   $especialidade= implode(",",$_POST['especiali']);
   $especie=  implode(",",$_POST['espe']);

    





    try{
        $conexao = Conexao::conectar();
        $stmt = $conexao -> prepare ("update tbEspecialidade INNER JOIN tbPrestadorServico on tbEspecialidade.codPrestadorServico = tbPrestadorServico.codPrestadorServico
                                      set nomeEspecialidade='$especialidade', especieEspecialidade='$especie'
                                      where tbPrestadorServico.emailPrestadorServico like '%$_SESSION[email]%'");
        $stmt -> execute();
        
        
        
        // echo "<script> alert ('Dados alterados com sucesso'); </script>";
        echo "<script> window.location = 'nav-restrita.php'</script>";
        }
        catch(PDOException $e){
         echo"Erro " . $e -> getMessage();
        
         
        }
        

?>

