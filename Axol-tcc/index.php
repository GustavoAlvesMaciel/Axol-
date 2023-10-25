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
  <link rel="stylesheet" href="./assets/css/homee.css">

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

        
        </ul>

      </nav>

      <div class="header-actions">

        

        <a href="./selectLogin.html" class="header-action-btn login-btn">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </a>



        <button class="header-action-btn nav-open-btn" aria-label="Open menu" data-nav-toggler>
          <ion-icon name="menu-outline"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <!-- 
    - #SEARCH BOX
  -->

  <div class="search-container" data-search-box>
    <div class="container">

      <button class="search-close-btn" aria-label="Fechar pesquisa" data-search-toggler>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="search-wrapper">
        <input type="search" name="search" placeholder="Pesquisar..." aria-label="Search" class="search-field">

        <button class="search-submit" aria-label="Submit" data-search-toggler>
          <ion-icon name="search-outline"></ion-icon>
        </button>
      </div>

    </div>
  </div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home" aria-label="hero" style="background-image: url('./assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">

            <p class="section-subtitle">Um sistema desenvolvido para o seu pet!</p>

            <h2 class="h1 hero-title">Axol</h2>

            <p class="hero-text">
                Temos como objetivo ajudar aos pais e mães de pets, seja procurando pet shops e clínicas próximas ou até mesmo mostrando Ongs para receber um pet sem lar!</p>

            <a href="index.php" class="btn btn-primary">
              <span class="span">Introdução</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner">

            <img src="./assets/images/axolnome.png" width="500" height="500" loading="lazy" alt="hero image"
              class="w-100">

         

            

          </figure>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <p class="section-subtitle">Utilidades do sistema</p>

          <h2 class="h2 section-title">Principais Funções</h2>

          <ul class="grid-list">

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="briefcase-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Clínicas 24h</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="file-tray-full-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Multiplataformas</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="color-palette-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Desing flexivel</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="layers-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Marketing de serviços</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="laptop-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Sistema web</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="thumbs-up-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Avaliações</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="headset-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Artigos Pet</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="server-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Segurança de dados</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="category-card">

                <div class="card-icon">
                  <ion-icon name="medkit-outline"></ion-icon>
                </div>

                <div>
                  <h3 class="h3 card-title">
                    <a href="#">Saúde Pet</a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner">

            <img src="./assets/images/post3.png" width="450" height="590" loading="lazy" alt="about banner"
              class="w-100 about-img">



          </figure>

          <div class="about-content">

            <p class="section-subtitle">Axol</p>

            <h2 class="h2 section-title">Principais objetivos:</h2>

            <ul class="about-list">

              <li class="about-item">

                <div class="item-icon item-icon-1">
                  <img src="./assets/images/about-icon-1.png" width="30" height="30" loading="lazy" aria-hidden="true">
                </div>

                <div>
                  <h3 class="h3 item-title">1. Informar sobre as clínicas que possuem veterinários especializados.</h3>

                </div>

              </li>

              <li class="about-item">

                <div class="item-icon item-icon-2">
                  <img src="./assets/images/about-icon-2.png" width="30" height="30" loading="lazy" aria-hidden="true">
                </div>

                <div>
                  <h3 class="h3 item-title">2. Informar sobre as clínicas 24h mais próximas.</h3>

                </div>

              </li>

              <li class="about-item">

                <div class="item-icon item-icon-3">
                  <img src="./assets/images/about-icon-3.png" width="30" height="30" loading="lazy" aria-hidden="true">
                </div>

                <div>
                  <h3 class="h3 item-title">3- Divulgar pet shops e seus produtos
                </h3>

                </div>

              </li>

            </ul>

            <a href="#" class="btn btn-primary">
              <span class="span">Voltar</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

        </div>
      </section>


      <!-- 
        - #COURSE
      -->

      <section class="section course" id="courses" aria-label="course"
        style="background-image: url('./assets/images/course-bg.jpg')">
        <div class="container">

          <p class="section-subtitle">Serviços</p>

          <h2 class="h2 section-title">Serviços Populares</h2>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/vet.png" width="370" height="270" loading="lazy"
                    alt="Competitive Strategy law for all students" class="img-cover">
                </figure>

                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">24h</time>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Vet Quality Centro Veterinário</a>
                  </h3>

                  <div class="rating-wrapper">

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <span class="rating-text">(Avaliações)</span>

                  </div>

                  <div class="card-footer">

                    
                    <div class="card-meta-item">
                    
                    </div>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/pet.png" width="370" height="270" loading="lazy"
                    alt="Machine Learning A-Z: Hands-On Python and java" class="img-cover">
                </figure>
              
                <div class="card-content">

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">10AM ás 22PM</time>
                    </li>

                  </ul>

                  <h3 class="h3">
                    <a href="#" class="card-title">Bicho Chique</a>
                  </h3>

                  <div class="rating-wrapper">

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <span class="rating-text">(Avaliações)</span>

                  </div>

                  <div class="card-footer">
                             
                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img src="./assets/images/pet2.png" width="370" height="270" loading="lazy"
                    alt="Achieving Advanced in Insights with Big" class="img-cover">
                </figure>              
                <div class="card-content">

                    <ul class="card-meta-list">
  
                      <li class="card-meta-item">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
  
                        <time datetime="PT18H15M44S" class="card-meta-text">12AM ás 22PM</time>
                      </li>
  
                    </ul>
  
                    <h3 class="h3">
                      <a href="#" class="card-title">Casa de Amigos</a>
                    </h3>

                  <div class="rating-wrapper">

                    <div class="rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <span class="rating-text">(Avaliações)</span>

                  </div>

                  <div class="card-footer">                  
                  </div>

                </div>

              </div>
            </li>

        </div>
      </section>

      <!-- 
        - #EVENT
      -->

      <section class="section event" id="event" aria-label="event">
        <div class="container">

          <p class="section-subtitle">Nossas Especialidades</p>

          <h2 class="h2 section-title">Categorias Pet</h2>

          <ul class="grid-list">

            <li>
              <div class="event-card">

                <figure class="card-banner">
                  <img src="./assets/images/dog.png" width="370" height="250" loading="lazy"
                    alt="Innovation & Technological Entrepreneurship Team" class="img-cover">
                </figure>

                <time class="badge" datetime="2022-12-04">Cães</time>

                <div class="card-content">

                  

                  <h3 class="h3">
                    <a href="#" class="card-title">Aqui temos suporte para o seu Doguinho!</a>
                  </h3>

                  <a href="#" class="btn-link">

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="event-card">

                <figure class="card-banner">
                  <img src="./assets/images/bird.PNG" width="370" height="250" loading="lazy"
                    alt="Virtual Spring Part-time Jobs Fair for Student" class="img-cover">
                </figure>

                <time class="badge" datetime="2022-10-30">Aves</time>

                <div class="card-content">

                  

                  <h3 class="h3">
                    <a href="#" class="card-title">Suporte para seus Passarinhos!</a>
                  </h3>

                  <a href="#" class="btn-link">

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
                <div class="event-card">
  
                  <figure class="card-banner">
                    <img src="./assets/images/tartaruga.png" width="370" height="250" loading="lazy"
                      alt="Virtual Spring Part-time Jobs Fair for Student" class="img-cover">
                  </figure>
  
                  <time class="badge" datetime="2022-10-30">Répteis</time>
  
                  <div class="card-content">
  
                    <h3 class="h3">
                      <a href="#" class="card-title">Suporte para seus Lagartinhos!</a>
                    </h3>
  
                    <a href="#" class="btn-link">
  
                      <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>
  
                  </div>
  
                </div>
              </li>

              <li>
                <div class="event-card">
  
                  <figure class="card-banner">
                    <img src="./assets/images/peixe.png" width="370" height="250" loading="lazy"
                      alt="Virtual Spring Part-time Jobs Fair for Student" class="img-cover">
                  </figure>
  
                  <time class="badge" datetime="2022-10-30">Marinhos</time>
  
                  <div class="card-content">
  
  
                    <h3 class="h3">
                      <a href="#" class="card-title">Suporte para os seus Peixinhos!</a>
                    </h3>
  
                    <a href="#" class="btn-link">
  
                      <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>
  
                  </div>
  
                </div>
              </li>

              <li>
                <div class="event-card">
  
                  <figure class="card-banner">
                    <img src="./assets/images/porquinho.png" width="370" height="250" loading="lazy"
                      alt="Virtual Spring Part-time Jobs Fair for Student" class="img-cover">
                  </figure>
  
                  <time class="badge" datetime="2022-10-30">Roedores</time>
  
                  <div class="card-content">
  
  
                    <h3 class="h3">
                      <a href="#" class="card-title">Suporte para os seus Ratinhos!</a>
                    </h3>
  
                    <a href="#" class="btn-link">
  
                      <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>
  
                  </div>
  
                </div>
              </li>

            <li>
              <div class="event-card">

                <figure class="card-banner">
                  <img src="./assets/images/cat.png" width="370" height="250" loading="lazy"
                    alt="Explorations of Regional Chief Executive Network" class="img-cover">
                </figure>

                <time class="badge" datetime="2022-09-18">Felinos</time>

                <div class="card-content">


                  <h3 class="h3">
                    <a href="#" class="card-title">Suporte para seus Gatinhos!</a>
                  </h3>

                  <a href="#" class="btn-link">

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter" aria-label="newsletter"
        style="background-image: url('./assets/images/newsletter-bg.jpg')">
        <div class="container">

          <p class="section-subtitle">Não possui uma conta?</p>

          <h2 class="h2 section-title">Faça logo seu cadastro!</h2>

          <form action="" class="newsletter-form">

  

            <button type="submit" class="btn btn-primary">
              <span class="span">Cadastre-se</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>

          </form>

        </div>
      </section>

    </article>
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
