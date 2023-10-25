<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../css/styleFormularios.css">

    <link rel="shortcut icon" href="../assets/images/Axolote.png" type="image/x-icon">

    <title>Axol</title>

    <!-- 
      - favicon
    -->
    <link rel="shortcut icon" href="../assets/images/axolnome.png" type="image/svg+xml">
  
    <!-- 
      - custom css link
    -->
    <link rel="stylesheet" href="user.css">

<link rel="stylesheet" href="index.css">
  
    <!-- 
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
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
  background-color: rgb(248,222,229);
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
        <a href="#" class="navbar-link" data-nav-toggler>Sobre nós</a>
      </li>

      <li class="navbar-item">
        <a href="#" class="navbar-link" data-nav-toggler>Serviços</a>
      </li>

      <li class="navbar-item">
        <a href="#" class="navbar-link" data-nav-toggler>Especialidades</a>
      </li>

      <li class="navbar-item">
        <a href="../restrito/pesquisa.php" class="navbar-link" data-nav-toggler>VEJA AQUI</a>
      </li>

    </ul>

  </nav>

  <div class="header-actions">

    <button class="header-action-btn" aria-label="Open search" data-search-toggler>
      <ion-icon name="search-outline"></ion-icon>
    </button>

    <a href="#" class="header-action-btn login-btn">
      <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

      <!-- <a href="#"> <span class="span"> Login / Registrar</span></a> -->
    </a>


    <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
      <ion-icon name="menu-outline"></ion-icon>
    </button>

  </div>

  <div class="overlay" data-nav-toggler data-overlay></div>

</div>
</header>
 
    <div class="card">
        <div class="imgBx">
            <img src="../assets/images/Axolote.png" alt="">
        </div>
        <div class="contentBx">
            <h3>Login!</h3>
            <h2 class="price"><small>Já possui uma conta?</small></h2>
            <a href="entrarAdm.php" class="buy">Logar</a>
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

</body>
</html>