<?php
session_start();

include_once("../model/Conexao.php");
require_once("../model/Horario.php");
require_once("../model/PrestadorServico.php");//FK

    $horario = new Horario();
    $prestadorServico = new PrestadorServico();

// do horario
 //   $linha = $_POST['linha'];

//$mostraHorario = $horario->listarHorario($linha);

// // do prestador servico
// $linas = $_POST['lina'];

// $mostrarPrestador = $prestador->listarPrestadorServico($linas);
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
    <link rel="stylesheet" href="../css/form2.css">
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
<br><br><br><br>
<?php /*
    foreach ($mostraHorario as $listar) {

        $dia = $listar['diaSemanaHorario']; //Variavel qualquer | Nome do atributo do banco
        $abertura = $listar['aberturaHorario']; 
        $fechamento = $listar['fechamentoHorario']; 
        $cod = $listar['codPrestadorServico']; //FK
    }
*/
    ?>
    <main>
        <div class="login-container2" id="login-container2">
            <div class="form-container2">
            <form class="form form-login" action="EditarHorario.php"  method="POST">

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
                    <h3 class="form-text">Editar Horário!</h3>
                    <div class="form-input-container">
                    <div class="contaner">                      

                      <input type="checkbox" name="data[]" value="Segunda">Segunda
                      <input type="checkbox" name="data[]" value="Terca">Terca
                      <input type="checkbox" name="data[]" value="Quarta">Quarta
                      <input type="checkbox" name="data[]" value="Quinta">Quinta
                      <br>
                      <input type="checkbox" name="data[]" value="Sexta">Sexta
                      <input type="checkbox" name="data[]" value="Sabado">Sabado
                      <input type="checkbox" name="data[]" value="Domingo">Domingo
                     </div>       
                     </div>
                     <div class="form-input-container">

             
              
                    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        //SQL para selecionar o registro
        global $conexao;
        $result_msg_cont = "SELECT * FROM tbHorario inner join tbPrestadorServico on tbHorario.codPrestadorServico = tbPrestadorServico.codPrestadorServico  WHERE  tbPrestadorServico.emailPrestadorServico like '%$_SESSION[email]%'";
        //Seleciona os registros
        $resultado_msg_cont =  $conexao->prepare($result_msg_cont);
        $resultado_msg_cont->execute();
        $row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC); 
        
        ?>
                    <div class="form-input-container">
                    <input type="hidden" name="id" value="<?php if(isset($row_msg_cont['codHorario'])){ echo $row_msg_cont['codHorario']; } ?>">
            
           
            <input class="form-input" type="text" id="aberturaEditar" name="aberturaEditar" placeholder="Digite o horario de abertura" value="<?php if(isset($row_msg_cont['aberturaHorario'])){ echo $row_msg_cont['aberturaHorario']; } ?>">
            <input class="form-input" type="text" name="fechamentoEditar" placeholder="Digite o horario de fechamento" value="<?php if(isset($row_msg_cont['fechamentoHorario'])){ echo $row_msg_cont['fechamentoHorario']; } ?>">
            <input class="form-input"  type="hidden" name="codEditar" value="<?php if(isset($row_msg_cont['codPrestadorServico'])){ echo $row_msg_cont['codPrestadorServico']; } ?>">  

            <br><br>
</div>

      </div>
            <input class="form-button" name="SendEditCont" type="submit" value="Editar" a hreaf='../restrito/nav-restrita.php'>
       
<br><br></div></div>
 <!--
            <input class="form-button" name="SendEditCont" type="submit" value="Editar" a hreaf='../restrito/nav-restrita.php'>


                      <input type="text" class="form-input" value="<?php echo  $abertura ?>" name="aberturaEditar" id="aberturaEditar">
                      <input type="text" class="form-input" value="<?php echo $fechamento ?>" name="fechamentoEditar" id="fechamentoEditar">
                      <input type="text" class="form-input" value="<?php echo $cod ?>" name="codEditar" id="codEditar">
                      </div>

                      <input class="form-button" name="SendEditCont" type="submit" value="Editar" a hreaf='../nav-restrita.php'>
      -->      
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