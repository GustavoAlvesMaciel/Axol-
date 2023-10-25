<?php
header("Location: ../loginUser/entrar-user.php");
header("Location: cadastra-telefoneUsuario.php");

require_once("../model/Usuario.php");
require_once("../model/TelefoneUsuario.php"); //---

session_start(); //--

$usuario = new Usuario();

$email = $_SESSION['email']; //---
$_SESSION['telefone'] = $_POST['txtTelefoneUsuario']; //---

    $nomeUsuario = $_POST['txtNomeUsuario'];
    $cpfUsuario = $_POST['txtCpfUsuario'];
    $logradouroUsuario = $_POST['txtLogradouroUsuario'];
    $complementoUsuario = $_POST['txtComplementoUsuario'];
    $cepUsuario = $_POST['txtCepUsuario'];
    $bairroUsuario = $_POST['txtBairroUsuario'];
    $cidadeUsuario = $_POST['txtCidadeUsuario'];
    $emailUsuario = $_POST['txtEmailUsuario'];
    $senhaUsuario = $_POST['txtSenhaUsuario'];
    $dataNascUsuario = $_POST['txtDataNascUsuario'];
    $sexoUsuario = $_POST['txtSexoUsuario'];
    $uf = $_POST['txtUf']; //NOVO
    

    $foto = $_FILES['txtImagemUsuario'];


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

              $usuario->setImagemUsuario($path);

          }else{

              $rand = rand(1, 6);
              $path = "imagens-random/not-image($rand).png";
              $usuario->setImagemUsuario($path);

          }

    $usuario->setNomeUsuario($nomeUsuario);
    $usuario->setCpfUsuario($cpfUsuario);
    $usuario->setLogradouroUsuario($logradouroUsuario);
    $usuario->setComplementoUsuario($complementoUsuario);
    $usuario->setCepUsuario($cepUsuario);
    $usuario->setBairroUsuario($bairroUsuario);
    $usuario->setCidadeUsuario($cidadeUsuario);
    $usuario->setEmailUsuario($emailUsuario);
    $usuario->setSenhaUsuario($senhaUsuario);
    $usuario->setDataNascUsuario($dataNascUsuario);
    $usuario->setSexoUsuario($sexoUsuario);
    $usuario->setUf($uf); //NOVO
    
    $usuario->cadastrar($usuario);
  
?>