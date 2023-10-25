<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/images/Axolote.png" type="image/x-icon">

  <title>Axol.com</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/axolnome.png" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/home.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/axolnome.png">
  <link rel="preload" as="image" href="./assets/images/axolnome.png" media="min-width(768px)">
  <link rel="preload" as="image" href="./assets/images/axolnome.png" media="min-width(768px)">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1>
        <img src="./assets/images/axolnome.png" width="90" height="90" loading="lazy" alt="hero image">


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
            <a href="#home" class="navbar-link" data-nav-toggler>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-toggler>Sobre nós</a>
          </li>

          <li class="navbar-item">
            <a href="#courses" class="navbar-link" data-nav-toggler>Serviços</a>
          </li>

          <li class="navbar-item">
            <a href="#event" class="navbar-link" data-nav-toggler>Especialidades</a>
          </li>

          <li class="navbar-item">
            <a href="./restrito/pesquisa.php" class="navbar-link" data-nav-toggler>Encontre</a>
          </li>

          <li class="navbar-item">
            <a href="./restrito/feed.php" class="navbar-link" data-nav-toggler>Feed</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

        <button class="header-action-btn" aria-label="Open search" data-search-toggler>
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <a href="./selectLogin.html" class="header-action-btn login-btn">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
          <a href="./selectLogin.html"> <span class="span"> Login / Registrar</span></a>
        </a>



        <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

  <main>
    <article>
    <section id="content">
      
      
    <main>
			<div class="head-title">
				<div class="left">
					<h1>O quê vamos compartilhar hoje?</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Axol</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="feed.php">Feed</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Nova postagem</span>
				</a>
			</div>

         	<!-- INICIO DE BLOCOS 3 QUARADOS -->
		  	<?php
            include "../extend/prestador.inc";
            ?>
          	<!-- FIM DE 3 BLOCOS -->

			<!-- Formulario post -->
			<div class="main2">
				<div class="newPost">
					<div class="infoUser">
						<div class="imgUser"></div>
						<strong>Nome</strong>
					</div>
					<form action="" class="formPost">
						<textarea name="textarea" id="" placeholder="O quê você quer compartilhar hoje?"></textarea>
						<div class="iconsAndButton">
							<div class="icons">
								<button class="btnFileForm"><img src="../imagem/image.png" alt="Adicionar uma imagem"></button>
								<button class="btnFileForm"><img src="../imagem/gif.png" alt="Adicionar uma gif"></button>
								<button class="btnFileForm"><img src="../imagem/video.png" alt="Adicionar um video"></button>
							</div>
							<button type="submit" class="btnSubmitForm">Publicar</button>
						</div>
					</form>
				</div>

				<ul class="posts">
					<li class="post">
						<div class="infoUserPost">
							<div class="imgUserPost"></div>

							<div class="nameAndHour">
								<strong>Nome</strong>
								<p>21h</p>
							</div>
						</div>

						<p>
							is simply dummy text of the printing and
							typesetting industry. Lorem Ipsum has been
							the industry's standard dummy text ever since
							the 1500s, when an unknown printer took a galley
							of type and scrambled it to make a type specimen book.
						</p>

						<div class="actionBtnPost">
							<button type="button" class="filesPost like"><img src="../imagem/heart.png" alt="Curtir">Curtir</button>
							<button type="button" class="filesPost comment"><img src="../imagem/comment.png" alt="Comentar">Comentar</button>
							<button type="button" class="filesPost share"><img src="../imagem/share.png" alt="Compartilhar">Compartilhar</button>
						</div>

					</li>

					<li class="post">
						<div class="infoUserPost">
							<div class="imgUserPost"></div>

							<div class="nameAndHour">
								<strong>Nome</strong>
								<p>21h</p>
							</div>
						</div>

						<p>
							is simply dummy text of the printing and
							typesetting industry. Lorem Ipsum has been
							the industry's standard dummy text ever since
							the 1500s, when an unknown printer took a galley
							of type and scrambled it to make a type specimen book.
						</p>

						<div class="actionBtnPost">
							<button type="button" class="filesPost like"><img src="../imagem/heart.png" alt="Curtir">Curtir</button>
							<button type="button" class="filesPost comment"><img src="../imagem/comment.png" alt="Comentar">Comentar</button>
							<button type="button" class="filesPost share"><img src="../imagem/share.png" alt="Compartilhar">Compartilhar</button>
						</div>

					</li>

					<li class="post">
						<div class="infoUserPost">
							<div class="imgUserPost"></div>

							<div class="nameAndHour">
								<strong>Nome</strong>
								<p>21h</p>
							</div>
						</div>

						<p>
							is simply dummy text of the printing and
							typesetting industry. Lorem Ipsum has been
							the industry's standard dummy text ever since
							the 1500s, when an unknown printer took a galley
							of type and scrambled it to make a type specimen book.
						</p>

						<div class="actionBtnPost">
							<button type="button" class="filesPost like"><img src="../imagem/heart.png" alt="Curtir">Curtir</button>
							<button type="button" class="filesPost comment"><img src="../imagem/comment.png" alt="Comentar">Comentar</button>
							<button type="button" class="filesPost share"><img src="../imagem/share.png" alt="Compartilhar">Compartilhar</button>
						</div>

					</li>
				</ul>

			</div>

		</main>
    </section>
        
  </main>





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
