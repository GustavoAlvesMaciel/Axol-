<?php
session_start();
print_r($_SESSION['emailUser']);
include_once("valida-permanencia.php");

include('../adm/Conexao.php');
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
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Glass Website</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    /><link rel="stylesheet" href="./css/sellect.css">
    <link rel="shortcut icon" href="./assets/images/Axolote.png" type="image/x-icon">
    <link rel="stylesheet" href="../perfis/pf.css" />
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

        <a href="./porfile.php" class="header-action-btn login-btn">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </a>

        </div>

        <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>
<br><br><br><br><br>
    <main>
    <?php
          try{
          $stmt = $pdo->prepare("SELECT nomeUsuario, dataNascUsuario, sexoUsuario, cpfUsuario, emailUsuario, numeroTelefoneUsuario, senhaUsuario, imagemUsuario, logradouroUsuario, complementoUsuario, cepUsuario, bairroUsuario, cidadeUsuario, uf FROM tbusuario  
                    INNER JOIN tbtelefoneusuario ON tbtelefoneusuario.codUsuario = tbtelefoneusuario.codUsuario
                    
                     WHERE emailUsuario LIKE '%$_SESSION[emailUser]%'");

          $stmt->execute();

          while ($row = $stmt->fetch(PDO::FETCH_BOTH)) { ?>
      <section class="glass">
        <div class="dashboard">
          <div class="user">
          <img class="test" <?php echo "src='../restrito/imagens/" . $row['imagemUsuario'] . "'"; ?> width="210px" height="70px" loading="lazy" alt="Competitive Strategy law for all students" class="img-cover">

            <h3>Nome:<?php echo "" . $row['nomeUsuario'] . ""; ?></h3>
            <p>Email:<?php echo "" . $row['emailUsuario'] . ""; ?></p>
          </div>
          <div class="links">
            <div class="link">
             
            </div>
            <div class="link">
            
            </div>
            <div class="link">
              
            </div>
            <div class="link">
            </div>
          </div>
          <div class="pro">
            <h2><a href="PerfilUser.php"><?php
                            //$consul =$_POST['consulta'];
                    
                            if (isset ($_SESSION['emailUser'])){
                                //$pesquisa = $_POST["consulta"];
                           global $conexao;
                                $stmt1 = $conexao->prepare( "SELECT 
                                 codUsuario , nomeUsuario, dataNascUsuario, sexoUsuario, cpfUsuario, emailUsuario, senhaUsuario, imagemUsuario,
                                 logradouroUsuario, complementoUsuario, cepUsuario, bairroUsuario, cidadeUsuario, uf  
                                FROM tbUsuario WHERE emailUsuario LIKE '%$_SESSION[emailUser]%'");
                                 $stmt1 ->execute();

                             
                                    while($row1 = $stmt1 ->fetch(PDO::FETCH_NUM)){
                                   
                                        echo "<form action='decisao-editarUsuario.php' method='post'><br>
                                        <td><button type='submit' class='btn btn-secondary' name='linha' id='linha' a hreaf='./decisao-editarHorario.php'>Editar Usúario</button></td><br>
                                    </form>";

                                echo "<form action='ExcluirUsuario.php' method='post'><br>
                                       <td><button type='submit' class='btn btn-danger' name='linha' id='linha' value='<?php echo  aqui bem o codigo?>'>Excluir Conta</button></td><br>
                                      </form>";


                                    }
                                    } else{


                                }
                            
                                        echo "</tr>";
                                    echo '</td>';
                                echo ('</tr>');

                                            
                        ?> <?php
                        //$consul =$_POST['consulta'];
                
                        if (isset ($_SESSION['emailUser'])){
                            //$pesquisa = $_POST["consulta"];
                       global $conexao;
                            $stmt1 = $conexao->prepare( "SELECT 
                             codTelefoneUsuario ,numeroTelefoneUsuario,  tbUsuario.codUsuario
                            FROM tbTelefoneUsuario inner join tbUsuario on tbTelefoneUsuario.codUsuario = tbUsuario.codUsuario
                            WHERE tbUsuario.emailUsuario LIKE '%$_SESSION[emailUser]%'");
                             $stmt1 ->execute();

                         
                                while($row1 = $stmt1 ->fetch(PDO::FETCH_NUM)){
                                                                                                                           
                                    /* <span>'. $row1[11]. '</span>'; */ 

                                    echo "<form action='decisao-editarTelefoneUsuario.php' method='post'><br>
                                    <td><button type='submit' class='btn btn-secondary' name='linha' id='linha' a hreaf='./decisao-editarHorario.php'>Editar Telefone</button></td><br>
                                </form>";

                            echo "<form action='ExcluirTelefoneUsuario.php' method='post'><br>
                                   <td><button type='submit' class='btn btn-danger' name='linha' id='linha' value='<?php echo  aqui bem o codigo?>'>Excluir Telefone</button></td><br>
                                  </form>";


                                }
                                } else{


                            }
                        
                                    echo "</tr>";
                                echo '</td>';
                            echo ('</tr>');

                                        
                    ?></a></h2>
          </div>
        </div>
        <div class="games">
          <div class="status">
          <div class="cards">
        

           
</div>
            
          </div>
          <div class="cards">
            <div class="card">
          <div class="card-info">

          
          <h1>Sua Descrição:</h1>

                    <div class=""> <?php echo "Data de Nascimento: " . $row['dataNascUsuario'] . "<br>"; ?></div>
                    <div class=""> <?php echo "Sexo: " . $row['sexoUsuario'] . "<br>"; ?></div>
                    <div class=""> <?php echo "CPF: " . $row['cpfUsuario'] . "<br>"; ?></div>
                    <div class=""> <?php echo "Senha: " . $row['senhaUsuario'] . "<br>"; ?></div>
                    <div class=""> <?php echo "Logradouro: " . $row['logradouroUsuario'] . "<br>"; ?></div>
                    <div class=""> <?php echo "Complemento: " . $row['complementoUsuario'] . "<br>"; ?></div>
                    <div class=""> <?php echo "CEP: " . $row['cepUsuario'] . "<br>"; ?></div>
                    <div class=""> <?php echo "Bairro: " . $row['bairroUsuario'] . "<br>"; ?></div>
                    <div class=""> <?php echo "Cidade: " . $row['cidadeUsuario'] . "<br>"; ?></div>
                    <div class=""> <?php echo "Estado: " . $row['uf'] . "<br>"; ?></div>      
                    <div class=""> <?php echo "Telefone: " . $row['numeroTelefoneUsuario'] . "<br>"; ?></div>               
         

              </div>
              <h2 class="percentage"></h2>
            </div>
         </div>  
    
      </section>
    </main>
    <div class="circle1"></div>
    <div class="circle2"></div>
    <br><br><br>
    <!--      <?php  
 } //fecha o laço while
} //fecha o try
catch(PDOException $e){
    echo "Erro" .$e->getMessage();
}
?>
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