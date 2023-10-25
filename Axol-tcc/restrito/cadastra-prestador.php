<?php
header("Location: ./form-telefoneprest.php");



session_start(); //---
require_once("../model/PrestadorServico.php");
require_once("../model/TelefonePrestador.php"); //---
require_once("../model/Especialidade.php");

$prestadorServico = new PrestadorServico();
// $postagem = new Postagem();

// $email = $_SESSION['email']; //---

// $listagemEspec = $prestadorServico->listarEspecifico($_SESSION['$email']); //------

//     foreach($listagemEspec as $listar){
        // $id = $listar['codPrestadorServico'];
//     }
// $postagem->setPrestadorServico($id);


 $prestadorServico->setNomePrestadorServico($_POST['txtNome']);
 $prestadorServico->setLogradouroPrestadorServico($_POST['txtLogradouro']);
 $prestadorServico->setEmailPrestadorServico($_POST['txtEmail']);
 $prestadorServico->setBairroPrestadorServico($_POST['txtBairro']);
 $prestadorServico->setCepPrestadorServico($_POST['txtCep']);
 $prestadorServico->setCidadePrestadorServico($_POST['txtCidade']);
 $prestadorServico->setComplementoPrestadorServico($_POST['txtComplemento']);
 $prestadorServico->setSenhaPrestadorServico($_POST['txtSenha']);
 $prestadorServico->setCnpjPrestadorServico($_POST['txtCnpj']);
 $prestadorServico->setTipoServico($_SESSION['tipoServico']=  implode(",",$_POST['tipoServico']));
 //$prestadorServico->setTipoServico($_POST['txtTipoServico']); //NOVO
 $prestadorServico->setUf($_POST['txtUf']); //NOVO
 


 $foto = $_FILES['txtImg'];


 if(strlen($foto['name']) > 0 && strlen($foto['type']) > 0){

     //- - - | IF PARA VER SE O ARQUIVO DEU ERRO |- - -//
     if($foto['error']){
         die("error");
     }

     $nomeArquivo = $foto['name'];

     //Colocando o nome da foto aleatória para não dar conflito no BD & pegando a extensão do arquivo//
     $nomeId = uniqid();
     $ext = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
     $path = $nomeId . "." . $ext;

     move_uploaded_file($foto['tmp_name'], 'imagens/'.$path);

     $prestadorServico->setImgPrestadorServico($path);

 }else{

     $rand = rand(1, 6);
     $path = "imagens-random/not-image($rand).png";
     $prestadorServico->setImgPrestadorServico($path);

 }


$prestadorServico->cadastrar($prestadorServico);

?>