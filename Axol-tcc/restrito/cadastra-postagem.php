<?php
header("Location: form-postagem.php");
session_start(); //---INICIA A SESSION, SEM ELE NÃO PEGA O codPestador, TEM QUE ESTAR EM PRIMEIRO
require_once("../model/Postagem.php");
require_once("../model/PrestadorServico.php"); //FK



    $postagem = new Postagem();
    $prestadorServico = new PrestadorServico(); //FK

    $listagemEspec = $prestadorServico->listarEspecifico($_SESSION['email']); //---

    foreach($listagemEspec as $listar){
        $id = $listar['codPrestadorServico'];
    }

    $postagem->setDescricaoPostagem($_SESSION['descricao'] = $_POST['txtDescricaoPostagem']); 
    $postagem->setTituloPostagem($_SESSION['titulo'] = $_POST['txtTituloPostagem']);
    $postagem->setDataPostagem($_SESSION['data'] = $_POST['txtDataPostagem']);

    $postagem->setPrestadorServico($id);

    
 $foto = $_FILES['txtImgPostagem'];


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

     $postagem->setImgPostagem($path);

 }else{

     $rand = rand(1, 6);
     $path = "imagens-random/not-image($rand).png";
     $postagem->setImgPostagem($path);

 }

    
    $postagem->cadastrar($postagem);

?>