<?php
require_once("../model/Usuario.php");


try {
  $usuario = new Usuario();

  $listausuario = $usuario->listar();
} catch (Exception $e) {
  echo $e->getMessage();
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
                    <a href="../index.php" class="navbar-link" data-nav-toggler>Voltar ao Home</a>
                  </li>
                            
                  
            </ul>

        </nav>

        <div class="header-actions">

          
        <a href="../selectLogin.html" class="header-action-btn login-btn">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </a>


            <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

        </div>

        <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>
<br><br><br>
    <main>
        <div class="login-container2" id="login-container2">
            <div class="form-container2">
                <form class="form form-login" action="./cadastra-usuario.php" enctype="multipart/form-data" method="post">

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
                    <h3 class="form-text">Insira suas informações abaixo!</h3>
                    <div class="form-input-container">
                     
                    <input type="text" id="txtNomeUsuario" class="form-input" name="txtNomeUsuario" placeholder="Digite seu nome" required>
                    <input type="text" id="txtCpfUsuario" class="form-input" name="txtCpfUsuario" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" placeholder="Digite seu CPF"  required>
                    
                    <!-- /* ---------------------------- validacao do cep ---------------------------- */ -->
                    <input name="txtCepUsuario" type="text" id="txtCepUsuario" class="form-input" value="" size="10" maxlength="9"
                        onblur="buscaCep(this.value);" placeholder="Seu CEP"/>
                    <input name="txtLogradouroUsuario" type="text" id="txtLogradouroUsuario" class="form-input" size="60" placeholder="Sua Rua" readonly/>
                    <input name="txtBairroUsuario" type="text" id="txtBairroUsuario" class="form-input" size="40" placeholder="Seu bairro" readonly/>
                    <input name="txtCidadeUsuario" type="text" id="txtCidadeUsuario" class="form-input" size="40" placeholder="Sua cidade" readonly/>
                    <input name="txtUf" type="text" id="txtUf" class="form-input" size="40" placeholder="Seu Estado" readonly/> <!--NOVO-->
                    <input type="text" id="txtComplementoUsuario" class="form-input" name="txtComplementoUsuario" placeholder="numero" required>
                    <input type="email" id="txtEmailUsuario" class="form-input" name="txtEmailUsuario" placeholder="Seu email" required>
                    <input type="password" id="txtSenhaUsuario" class="form-input" name="txtSenhaUsuario" placeholder="Sua senha" required>
                    <input type="file" id="txtImagemUsuario" class="form-input" name="txtImagemUsuario" placeholder="Sua imagem" required>
                    <input type="date" id="txtDataNascUsuario" class="form-input" name="txtDataNascUsuario" required>
                    <input type="tel" id="txtTelefoneUsuario" class="form-input" name="txtTelefoneUsuario" onkeyup="mascaraFone(event)" placeholder="Seu Telefone" required>

                    <script>
                    function mascaraFone(event) {
                        var valor = document.getElementById("txtTelefoneUsuario").attributes[0].ownerElement['value'];
                        var retorno = valor.replace(/\D/g, "");
                        retorno = retorno.replace(/^0/, "");
                        if (retorno.length > 10) {
                          retorno = retorno.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
                        } else if (retorno.length > 5) {
                          if (retorno.length == 6 && event.code == "Backspace") { 
                            // necessário pois senão o "-" fica sempre voltando ao dar backspace
                            return; 
                          } 
                          retorno = retorno.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
                        } else if (retorno.length > 2) {
                          retorno = retorno.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
                        } else {
                          if (retorno.length != 0) {
                            retorno = retorno.replace(/^(\d*)/, "($1");
                          }
                        }
                        document.getElementById("txtTelefoneUsuario").attributes[0].ownerElement['value'] = retorno;
                      }
                    </script>     </div>              
                      <h3 class="form-text">Selecione seu Gênero!</h3>

                    <div class="contaner">                      

                                        <!-- radio butons  -->
                    <INPUT TYPE="RADIO" class="btn-check" VALUE="Masculino" id="txtSexoUsuario" name="txtSexoUsuario"> Masculino
                    <INPUT TYPE="RADIO" class="btn-check" VALUE="Feminino" id="txtSexoUsuario" name="txtSexoUsuario"> Feminino
                    <INPUT TYPE="RADIO" class="btn-check" VALUE="Não Informar" id="txtSexoUsuario" name="txtSexoUsuario"> Não Informar
                   </div>

                    <input  type="submit" class="form-button" value="Cadastrar">
                    <a href="../loginUser/entrar-user.php"  type="submit" class="form-button" value="Continuar">Logar</a>
                </form>
            </div>
            <div class="overlay2-container2">
                <div class="overlay2">
                    <h2 class="form-title form-title-light">Olá Cliente!</h2>
                    
                </div>
            </div>
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