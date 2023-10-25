<?php
header("Location: feed.php");
//header("Location: cadastra-postagem.php");

session_start();

require_once("../model/Comentario.php");
/*require_once("../model/Usuario.php"); //FK
require_once("../model/Postagem.php"); //FK*/

    $comentario = new Comentario();
    /*$usuario = new Usuario(); //FK
    $postagem = new Postagem(); //FK

    $listagemEspec = $usuario->listarEspecifico($_SESSION['email']); //---
    $listagemEspec = $postagem->listarEspecifico($_SESSION['descricao']);

    foreach($listagemEspec as $listar){
        $id = $listar['codUsuario'];
        $code = $listar['codPostagem'];
    }


    $comentario->setDescricaoComentario($_POST['descricao'] = $_POST['txtDescricaoComentario']);

 
    $comentario->setUsuario($id); //FK

    $comentario->setPostagem($code); //FK*/

    $comentario->cadastrar($comentario);
    
?>