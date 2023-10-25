<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link name="stylesheet" rel="stylesheet" href="../css/log3.css">
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

<body>
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

        <a href="../selectLogin.html" class="header-action-btn login-btn">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </a>

        <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>

    <div class="container2">
        <div class="content2">
            <div class="image-box">
                <img src="../assets/images/axolnome.png" alt="">
            </div>
            <form name='login' method='post' action="valida-login.php">
                <div class="topic">Faça Login</div>
                <div class="input-box">
                    <input type="text" name='login' id='login' required>
                    <label>Login</label>
                </div>
                <div class="input-box">
                    <input type='password' name='senha' id='senha' required>
                    <label>Senha</label>
                </div>

                <div class="input-box">
                    <input type="submit" value="Logar">
                </div>
            </form>
        </div>
    </div>
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