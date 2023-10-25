
<?php
session_start();

include("valida-permanencia.php");

?>
<?php
require_once("../model/avaliacao.php");
require_once("../model/Usuario.php");
require_once("../model/PrestadorServico.php");
try {
  $avaliacao = new Avaliacao();
  $prestadorServico= new PrestadorServico();
  $usuario = new Usuario();

  $listausuario = $usuario->listar();
  $listaprestadorServico = $prestadorServico->listar();
  $listaAvaliacao = $avaliacao->listar();
} catch (Exception $e) {
  echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/estrela.css">
        <link rel="stylesheet" href="../assets/css/homee.css">

</head>
<body>
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
                        <a href="../index.php" class="navbar-link" data-nav-toggler>Home</a>
                      </li>
                                 
                      <li class="navbar-item">
                        <a href="../restrito/pesquisa.php" class="navbar-link" data-nav-toggler>Encontre</a>
                      </li>
            
                      <li class="navbar-item">
                        <a href="../restrito/feed.php" class="navbar-link" data-nav-toggler>Feed</a>
                      </li>

                     
                      
                </ul>

            </nav>

            <div class="header-actions">

                <button class="header-action-btn" aria-label="Open search" data-search-toggler>
                    <ion-icon name="search-outline"></ion-icon>
                </button>

                <a href="#" class="header-action-btn login-btn">
                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                    <a href=".../selectLogin.html"> <span class="span"> Login / Registrar</span></a>
                </a>


                <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
                    <ion-icon name="menu-outline"></ion-icon>
                </button>

            </div>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
    </header>
    <br><br><br><br><br><br><br><br><br><br>
<h1>Avalie</h1>
		
    
       <form method="POST" action="./cadastra-avaliacao.php" enctype="multipart/form-data">
        <div class="estrela">
            <input type="radio" id="vazio" name="estrela" value="" checked >

               <label for="estrela1"><i class="fa"></i></>
            <input type="radio" id="estrela1" name="estrela" value="1">

            <label for="estrela2"><i class="fa"></i></>
            <input type="radio" id="estrela2" name="estrela" value="2">

            <label for="estrela3"><i class="fa"></i></>
            <input type="radio" id="estrela3" name="estrela" value="3">

            <label for="estrela4"><i class="fa"></i></>
            <input type="radio" id="estrela4" name="estrela" value="4">

            <label for="estrela5"><i class="fa"></i></>
            <input type="radio" id="estrela5" name="estrela" value="5">

            <label>Prestador:</label>
            <select name="PrestadorServico">
                <option value="0">Selecione</option>
                <?php foreach ($listaprestadorServico as $listarP){ ?>
                    <option value="<?php echo $listarP['codPrestadorServico'] ?>">
                        <?php echo $listarP['nomePrestadorServico'] ?>
                    </option>
                <?php } ?>
            </select>

            <label>Usuário:</label>
            <select name="Usuario">
                <option value="0">Selecione</option>
                <?php foreach ($listausuario as $listar){ ?>
                    <option value="<?php echo $listar['codUsuario'] ?>">
                        <?php echo $listar['nomeUsuario'] ?>
                    </option>
                <?php } ?>
                
            </select>
        <button class="header-action-btn login-btn" type="submit" value="Cadastrar" > Cadastrar </button>
           
        </div>

       </form>
       <br><br><br><br><br><br><br><br><br><br>

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