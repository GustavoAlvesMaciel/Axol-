<?php
session_start();
require_once("../model/Usuario.php");

$usuario = new Usuario();

//$linha = $_POST['linha'];

//$mostraUsuario = $usuario->listarUsuario($linha);
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
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/324b71f187.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/foorm.css">
    <link rel="shortcut icon" href="./assets/images/Axolote.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/intest.css"> <!--scrollball barra de rodagem-->

    <script src="../js/forms.js" defer></script>
    <script src="../mascaras/mascara.js"></script>
    <link rel="shortcut icon" href="../assets/images/Axolote.png" type="image/x-icon">

<title>Axol</title>

<!-- 
      - favicon
    -->
<link rel="shortcut icon" href="../assets/images/axolnome.png" type="image/svg+xml">

<!-- 
      - custom css link
    -->
<link rel="stylesheet" href="../assets/css/homee.css">

<!-- 
      - google font link
    -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">

<!-- 
      - preload images
    -->
<link rel="preload" as="image" href="../assets/images/axolnome.png">
<link rel="preload" as="image" href="../assets/images/axolnome.png" media="min-width(768px)">
<link rel="preload" as="image" href="../assets/images/axolnome.png" media="min-width(768px)">

</head>



<body id="top">

<!-- 
- #HEADER
-->

<!--PARA FICAR COM FUNDO DOS FORMS ROSA-->
<style>
    #top {
        background-color: rgb(248, 222, 229);
    }
           /* Contaner */
.form-login .contaner{
    border-top-left-radius:10px;
    border-top-right-radius:10px;
    border-bottom-left-radius:10px;
    border-bottom-right-radius:10px;
    text-transform:capitalize;
    padding-left:15px;
   }
   
   /* Nome txtSexoUsuario */
   #txtSexoUsuario{
    width:75px;
    left:170px;
    margin-left:99px;
    position:relative;
    top:21px;
    min-width:0px;
    box-shadow:none;
    display:flex;
    color:rgb(0, 0, 0);
   }
   
/* Form Division */
#login-container2 form{
 transform:translatex(0px) translatey(0px);
}
</style>


<header class="header" data-header>
    <div class="container">

        <h1>
            <img src="../assets/images/axolnome.png" width="90" height="90" loading="lazy" alt="hero image">


        </h1>

        <nav class="navbar" data-navbar>
            <div class="navbar-top">
                <a href="#" class="logo">Axol</a>

                <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
                    <ion-icon name="close-outline">Axol</ion-icon>
                </button>
            </div>

            <ul class="navbar-list">
            
               
                  <li class="navbar-item">
                    <a href="../restrito/pesquisa.php" class="navbar-link" data-nav-toggler>Encontre</a>
                  </li>
        
                  <li class="navbar-item">
                    <a href="../restrito/feed.php" class="navbar-link" data-nav-toggler>Feed</a>
                  </li>
                  
                  <li class="navbar-item">
                    <a href="logout.php" class="navbar-link" data-nav-toggler>Sair</a>
                  </li>

                
            </ul>

        </nav>

        <div class="header-actions">

            <button class="header-action-btn" aria-label="Open search" data-search-toggler>
                <ion-icon name="search-outline"></ion-icon>
            </button>

            <a href="#" class="header-action-btn login-btn">
                <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                <a href="./selectLogin.html"> <span class="span"></span></a>
            </a>


            <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

        </div>

        <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>
<br><br><br>
<?php /*
    foreach ($mostraUsuario as $listar) {

        $nome = $listar['nomeUsuario']; //igual do banco 
        $data = $listar['dataNascUsuario'];
        $sexo = $listar['sexoUsuario']; 
        $cpf = $listar['cpfUsuario'];
        $email = $listar['emailUsuario']; 
        $senha = $listar['senhaUsuario'];
        $imagem = $listar['imagemUsuario'];  //DÚVIDA NESSA, PERGUNTAR PRA DAVI
        $logradouro = $listar['logradouroUsuario'];
        $complemento = $listar['complementoUsuario']; 
        $cep = $listar['cepUsuario'];
        $bairro = $listar['bairroUsuario']; 
        $cidade = $listar['cidadeUsuario'];
        $uf = $listar['uf']; //NOVO

    } */
    ?>

    <main>
        <div class="login-container2" id="login-container2">
            <div class="form-container2">
            <form class="form form-login" action="EditarUsuario.php" enctype="multipart/form-data" method="POST">

                    <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <h3 class="form-text">Editar Perfil!</h3>
                    <div class="form-input-container">

                    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        //SQL para selecionar o registro
        global $conexao;
        $result_msg_cont = "SELECT * FROM tbUsuario  WHERE  emailUsuario like '%$_SESSION[emailUser]%'";
        //Seleciona os registros
        $resultado_msg_cont =  $conexao->prepare($result_msg_cont);
        $resultado_msg_cont->execute();
        $row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC); 
        
        ?>
                    <div class="form-input-container">
             
            <input class="form-input" type="text" name="nomeEditar" placeholder="Digite seu Nome" value="<?php if(isset($row_msg_cont['nomeUsuario'])){ echo $row_msg_cont['nomeUsuario']; } ?>">
            <input class="form-input" type="date" name="dataEditar" placeholder="Digite sua Data de Nascimento" value="<?php if(isset($row_msg_cont['dataNascUsuario'])){ echo $row_msg_cont['dataNascUsuario']; } ?>"> 
            <input class="form-input" type="text" name="cpfEditar" placeholder="Seu CPF" value="<?php if(isset($row_msg_cont['cpfUsuario'])){ echo $row_msg_cont['cpfUsuario']; } ?>">   
             <input class="form-input" type="email" name="emailEditar" placeholder="Digite seu Email" value="<?php if(isset($row_msg_cont['emailUsuario'])){ echo $row_msg_cont['emailUsuario']; } ?>">     
            <input class="form-input" type="password" name="senhaEditar" placeholder="Digite sua Senha" value="<?php if(isset($row_msg_cont['senhaUsuario'])){ echo $row_msg_cont['senhaUsuario']; } ?>">  
            <input class="form-input" type="file" name="imagemEditar" placeholder="Insira sua Imagem" value="<?php if(isset($row_msg_cont['imagemUsuario'])){ echo $row_msg_cont['imagemUsuario']; } ?>"> 
            <input class="form-input" type="text" name="logradouroEditar" placeholder="Digite seu Longradouro" value="<?php if(isset($row_msg_cont['logradouroUsuario'])){ echo $row_msg_cont['logradouroUsuario']; } ?>"> 
            <input class="form-input" type="text" name="complementoEditar" placeholder="Digite da Complemento" value="<?php if(isset($row_msg_cont['complementoUsuario'])){ echo $row_msg_cont['complementoUsuario']; } ?>"> 
            <input class="form-input" type="text" name="cepEditar" placeholder="Digite seu CEP" value="<?php if(isset($row_msg_cont['cepUsuario'])){ echo $row_msg_cont['cepUsuario'];}?>">
            <input class="form-input" type="text" name="bairroEditar" placeholder="Digite seu Bairro" value="<?php if(isset($row_msg_cont['bairroUsuario'])){ echo $row_msg_cont['bairroUsuario']; } ?>">       
            <input class="form-input" type="text" name="cidadeEditar" placeholder="Digite sua Cidade" value="<?php if(isset($row_msg_cont['cidadeUsuario'])){ echo $row_msg_cont['cidadeUsuario']; } ?>">   
            <input class="form-input" type="text" name="ufEditar" placeholder="Digite seu Estado" value="<?php if(isset($row_msg_cont['uf'])){ echo $row_msg_cont['uf']; } ?>"> 
            </div>   </div>                      <!-- radio butons  -->             
                      <h3 class="form-text">Selecione seu Gênero!</h3>
           <div class="contaner">                      
                    <INPUT TYPE="RADIO" class="btn-check"value="" name="sexoEditar" id="sexoEditar"> Masculino
                    <INPUT TYPE="RADIO" class="btn-check"value="" name="sexoEditar" id="sexoEditar"> Feminino
                    <INPUT TYPE="RADIO" class="btn-check"value="" name="sexoEditar" id="sexoEditar"> Não Informar
          </div>
<br><br>
            <input class="form-button" name="SendEditCont" type="submit" value="Editar" a hreaf='../restrito/PerfilUser.php'>

            <!---         

                     
                    <input type="text" class="form-input" value="<?php echo $nome ?>" name="nomeEditar" id="nomeEditar" placeholder="Digite seu nome">
                    <input type="date" class="form-input" value="<?php echo $data ?>" name="dataEditar" id="dataEditar">
                    <input type="text"  class="form-input" value="<?php echo $cpf ?>" name="cpfEditar" id="cpfEditar"  placeholder="Digite seu CPF">
                    <input type="email" class="form-input" value="<?php echo $email ?>" name="emailEditar" id="emailEditar"  placeholder="Digite seu Email">
                    <input type="password" class="form-input" value="<?php echo $senha ?>" name="senhaEditar" id="senhaEditar"  placeholder="Digite sua senha">
                    <input type="text" class="form-input" value="<?php echo $imagem ?>" name="imagemEditar" id="imagemEditar">
                    <input type="text" class="form-input" value="<?php echo $logradouro ?>" name="logradouroEditar" id="txtLogradouroUsuario" placeholder="Digite sua rua" readonly>
                    <input type="text" class="form-input" value="<?php echo $complemento ?>" name="complementoEditar" id="complementoEditar" placeholder="Digite seu numero" readonly>
                    <input type="text" onblur="buscaCep(this.value);" class="form-input" value="<?php echo $cep ?>" name="cepEditar" id="txtCepUsuario" maxlength="9" placeholder="Digite seu CEP">
                    <input type="text" class="form-input" value="<?php echo $bairro ?>" name="bairroEditar" id="txtBairroUsuario" placeholder="Digite seu Bairro" readonly>
                    <input type="text" class="form-input" value="<?php echo $cidade ?>" name="cidadeEditar" id="txtCidadeUsuario" placeholder="Digite sua Cidade" readonly>
                    <input type="text" class="form-input" value="<?php echo $uf ?>" name="ufEditar" id="txtUf"  placeholder="Digite seu Estado" readonly> --> <!--NOVO-->
              <!--      <input type="text" class="form-input" value="<?php echo $sexo ?>" name="sexoEditar" id="sexoEditar"> -->
                                                            <!-- radio butons  -->
                    <!-- <div display: block, margin-top: 0em, margin-block-end: 1em >
                    <INPUT TYPE="RADIO" value="" name="sexoEditar" id="sexoEditar"> Masculinos
                    <INPUT TYPE="RADIO" value="" name="sexoEditar" id="sexoEditar"> Femenino
                    <INPUT TYPE="RADIO" value="" name="sexoEditar" id="sexoEditar"> Não Informar
                    </div> -->


<!--
                  </div>
                    <a href="#" class="form-link">Cadastre-se aqui!</a>
                    <button class="form-button"  type="submit" value="<?php echo $linha ?>" name="linha" id="linha">Salvar alterações</button>

                  </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <h2 class="form-title form-title-light">Editar!</h2>
                    
                </div>
            </div> -->
        </div>
        
    </main>
    <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
        <ion-icon name="arrow-up"></ion-icon>
    </a>





    <!-- 
    - custom js link
  -->
    <script src="./assets/js/scriptHome.js" defer></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">

          <a href="#" class="logo">Axol</a>

          <p class="section-text">
            Se trata de um sistema desenvolvido pela empresa "StarLight" com foco em auxiliar os donos de pets.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Explorar</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Sobre nós</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Informações</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Serviços</span>
            </a>
          </li>

          

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Funcionalidades</p>
          </li>

          <li>
            <a href="selectLogin.html" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Cadastro</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

              <span class="span">Em contrução...</span>
            </a>
          </li>

          

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Informações de Contato</p>
          </li>

          <li class="footer-item">
            <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

            <address class="footer-link">
              Etec Guaianazes.
            </address>
          </li>

          <li class="footer-item">
            <ion-icon name="call" aria-hidden="true"></ion-icon>

            <a href="tel:+13647657839" class="footer-link">(55) 11-4002-8922</a>
          </li>

          <li class="footer-item">
            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

            <a href="mailto:contact@eduhome.com" class="footer-link">starlight@gmail.com</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
           <a href="#" class="copyright-link">Axol</a>
        </p>
      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="arrow-up"></ion-icon>
  </a>

</body>

</html>
