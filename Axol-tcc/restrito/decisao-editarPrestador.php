<?php
session_start();
require_once("../model/PrestadorServico.php");

$prestadorServico = new PrestadorServico();

//$linha = $_POST['linha'];

//$mostraPrestador = $prestadorServico->listarPrestadorServico($linha);
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
                    <a href="nav-restrita.php" class="navbar-link" data-nav-toggler>Dashboard</a>
                  </li>
            <li class="navbar-item">
            <a href="../geo/localizar.php" class="navbar-link" data-nav-toggler>Localizar-se</a>
                  </li>
                             
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
<?php /*
    foreach ($mostraPrestador as $listar) {

        $nome = $listar['nomePrestadorServico']; //nome do banco
        $cnpj = $listar['cnpjPrestadorServico'];
        $email = $listar['emailPrestadorServico'];
        $senha = $listar['senhaPrestadorServico'];
        $img = $listar['imgPrestadorServico'];
        $logradouro = $listar['logradouroPrestadorServico'];
        $complemento = $listar['complementoPrestadorServico'];
        $cep = $listar['cepPrestadorServico'];
        $bairro = $listar['bairroPrestadorServico'];
        $cidade = $listar['cidadePrestadorServico'];
        $uf = $listar['uf']; //NOVO
    
    } */
    ?>

    <main>
        <div class="login-container2" id="login-container2">
            <div class="form-container2">
            <form class="form form-login" action="EditarPrestador.php" enctype="multipart/form-data" method="POST">

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
                    <p class="form-text">Editar Prestador!</p>
                    <div class="form-input-container">
                     

                    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        //SQL para selecionar o registro
        global $conexao;
        $result_msg_cont = "SELECT * FROM tbPrestadorServico WHERE  emailPrestadorServico like '%$_SESSION[email]%'";
        //Seleciona os registros
        $resultado_msg_cont =  $conexao->prepare($result_msg_cont);
        $resultado_msg_cont->execute();
        $row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC); 
        
        ?>
               <div class="form-input-container">
            <input type="hidden" name="id" value="<?php if(isset($row_msg_cont['codPrestadorServico'])){ echo $row_msg_cont['codPrestadorServico']; } ?>">
            
           
            <input class="form-input" type="text" name="nome" placeholder="Digite seu Nome" value="<?php if(isset($row_msg_cont['nomePrestadorServico'])){ echo $row_msg_cont['nomePrestadorServico']; } ?>">
            <input class="form-input" type="text" name="cnpj" placeholder="Digite seu CNPJ" value="<?php if(isset($row_msg_cont['cnpjPrestadorServico'])){ echo $row_msg_cont['cnpjPrestadorServico']; } ?>"> 
            <input class="form-input" type="email" name="email" placeholder="Seu melhor Email" value="<?php if(isset($row_msg_cont['emailPrestadorServico'])){ echo $row_msg_cont['emailPrestadorServico']; } ?>">   
             <input class="form-input" type="password" name="senha" placeholder="Digite sua Senha" value="<?php if(isset($row_msg_cont['senhaPrestadorServico'])){ echo $row_msg_cont['senhaPrestadorServico']; } ?>">     
            <input type="hidden"  name="img" placeholder="Insira uma Imagem" value="<?php if(isset($row_msg_cont['imgPrestadorServico'])){ echo $row_msg_cont['imgPrestadorServico']; } ?>">  
            <input class="form-input" type="text" name="logradouro" placeholder="Digite seu Logradouro" value="<?php if(isset($row_msg_cont['logradouroPrestadorServico'])){ echo $row_msg_cont['logradouroPrestadorServico']; } ?>"> 
            <input class="form-input" type="number" name="complemento" placeholder="Digite seu Complemento" value="<?php if(isset($row_msg_cont['complementoPrestadorServico'])){ echo $row_msg_cont['complementoPrestadorServico']; } ?>"> 
            <input class="form-input" type="text" name="cep" placeholder="Digite seu CEP" value="<?php if(isset($row_msg_cont['cepPrestadorServico'])){ echo $row_msg_cont['cepPrestadorServico']; } ?>"> 
            <input class="form-input" type="text" name="bairro" placeholder="Digite seu Bairro" value="<?php if(isset($row_msg_cont['bairroPrestadorServico'])){ echo $row_msg_cont['bairroPrestadorServico']; } ?>">          
            <input class="form-input" type="text" name="cidade" placeholder="Digite sua Cidade" value="<?php if(isset($row_msg_cont['cidadePrestadorServico'])){ echo $row_msg_cont['cidadePrestadorServico']; } ?>">   
            <input class="form-input" type="text" name="uf" placeholder="Digite UF" value="<?php if(isset($row_msg_cont['uf'])){ echo $row_msg_cont['uf']; } ?>">  
         <!--   <input class="form-input" type="file" class="form-control" name="arquivo" id="arquivo" />-->
            <input type="checkbox" class="btn-check" name="tipoServico[]" value="Clinica" id="NomeEspecialidade" autocomplete="off"/>Clinica<br/>
                    <input type="checkbox" class="btn-check" name="tipoServico[]" value="Pet shop" id="NomeEspecialidade" autocomplete="off"/>Pet shop<br/>
                    <input type="checkbox" class="btn-check" name="tipoServico[]" value="Outro" id="NomeEspecialidade" autocomplete="off"/>Outro<br/> 
           
         
<br><br>
      </div>
      </div>
            <input class="form-button" name="SendEditCont" type="submit" value="Editar" a hreaf='../restrito/nav-restrita.php'>
      </form>
              <!--
                      <input class="form-input" type="text" onblur="buscaCnpj(this.value);" value="<?php echo $cnpj ?>" name="cnpjEditar" id="txtCnpj" maxlength="14" placeholder="Digite seu CNPJ">                
                      <input class="form-input" type="text" value="<?php echo $nome ?>" name="nomeEditar" id="txtNome" placeholder="Digite seu nome">
                      <input class="form-input" type="text" value="<?php echo $img ?>" name="imgEditar" id="imgEditar">          
                      <input class="form-input" type="text" value="<?php echo $cep ?>" name="cepEditar" id="txtCep" placeholder="Digite seu CEP" readonly>      
                      <input class="form-input" type="text" value="<?php echo $logradouro ?>" name="logradouroEditar" id="txtLogradouro" placeholder="Digite sua rua" readonly>
                      <input class="form-input" type="number" value="<?php echo $complemento ?>" name="complementoEditar" id="txtNumero" placeholder="Digite seu numero" >             
                      <input class="form-input" type="text" value="<?php echo $bairro ?>" name="bairroEditar" id="txtBairro" placeholder="Digite seu Bairro" readonly>
                      <input class="form-input" type="text" value="<?php echo $cidade ?>" name="cidadeEditar" id="txtCidade"  placeholder="Digite sua Cidade" readonly>
                      <input class="form-input" type="text" value="<?php echo $uf ?>" name="ufEditar" id="txtUf" placeholder="Digite seu Estado" readonly>
                      <input class="form-input" type="email" value="<?php echo $email ?>" name="emailEditar" id="emailEditar" placeholder="Digite seu Email">                 
                      <input class="form-input" type="password" value="<?php echo $senha ?>" name="senhaEditar" id="senhaEditar" placeholder="Digite sua senha">                

                  </div>
                    <a href="#" class="form-link">Cadastre-se aqui!</a>
                    <button class="form-button" type="submit" value="<?php echo $linha ?>" name="linha" id="linha">Salvar alterações</button>

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