<?php
session_start();

include_once("valida-permanencia.php");
include('../adm/Conexao.php');
// require('../restrito/cadastra-postagem.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://kit.fontawesome.com/324b71f187.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/fed2.css">
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


<script type="text/javascript">
            function ajax() {
            var req = new XMLHttpRequest();
            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }
            req.open('GET', 'chat.php', true);
            req.send();
        }

        setInterval(function() { ajax(); }, 1000);        
</script>

<body id="top">

<!-- 
- #HEADER
-->



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
	<!-- CONTENT -->


         	

			<!-- Formulario post -->
			<div class="main2">
				
        <?php 
     try{
       $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
       //var_dump($dados);
       $nome = "%".$dados."%";

         $stmt = $pdo->prepare("SELECT codPostagem, descricaoPostagem, imgPostagem, dataPostagem, tituloPostagem FROM tbpostagem
         INNER JOIN tbprestadorservico ON tbprestadorservico.codPrestadorServico = tbpostagem.codPrestadorServico
         WHERE tituloPostagem LIKE :titulo ORDER BY codPostagem DESC");
         $stmt->bindParam(':titulo', $nome, PDO::PARAM_STR);
         $stmt->execute();

         while($row = $stmt->fetch(PDO::FETCH_BOTH)){  ?>
      <?php
    //  try{
    //   // if (isset ($_SESSION['email'])){
    //     global $conexao;
    //     $stmt1 = $pdo->prepare("SELECT
    //     codPostagem,descricaoPostagem,imgPostagem,tituloPostagem,dataPostagem FROM tbpostagem
    //     INNER JOIN tbprestadorservico ON tbprestadorservico.codPrestadorServico = tbpostagem.codPrestadorServico
    //     WHERE emailPrestadorServico LIKE '%$_SESSION[email]%'");
    //     $stmt1 ->execute();
    //     while($row = $stmt1 ->fetch(PDO::FETCH_NUM)){
    //       // while($row = $stmt->fetch(PDO::FETCH_BOTH)){
      ?>
				<ul class="posts">
				
					
					</li>
         
					<li class="post">
						<div class="infoUserPost">
							<div class="imgUser">
              </div>
							<div class="nameAndHour">
             
                              

    
    
    <ul class="boxposts">
 <li>
        

							</div>
						</div>
            						<div class="actionBtnPost">
                        <form class="form form-login" action="cadastra-comentario.php" enctype="multipart/form-data" method="post">


<p class="form-text">Inserir Comentário!</p>
<div class="actionBtnPost">
<textarea type="text" class="actionBtnPost" id="mensagem" name="mensagem" cols="30" rows="5" maxlength="250" placeholder="Escreva um comentário" required></textarea>

</div>     <br>
         <button  type="submit" class="filesPost comment" value="Enviar"><img src="../imagem/comment.png" alt="Comentar">Comentar</button>

</form>

              <!-- <span class="thumb"></span> -->
        <img <?php echo "src='../restrito/imagens/".$row['imgPostagem']."'"; ?> width="300" height="300">
        </span>
        <span class="content">
             <h1 name="tituloPostagem"><?php  echo $row['tituloPostagem']. "<br>";?></h1>
             <p> <?php echo"Descricao: " .$row['descricaoPostagem']. "<br>";?></p>
             <span > <?php echo"Data da Publicação" .$row['dataPostagem']. "<br>";?></span>

<h3><?php echo "Comentários" ?></h3>
<!--COMENTÁRIOS-->
<center>   
<?php 
include '../model/Conexao.php';
    try{
    $conexao = Conexao::conectar();

    $stmt = $conexao->prepare("SELECT * FROM tbcomentario");

    $stmt->execute();


    while($row = $stmt->fetch(PDO::FETCH_BOTH)){  ?>


<div class="wrapper">
<figure class="card">
    <figcaption class="card__cap">
        <div class="carddesc"> <?php echo $row['mensagem']. "<br>";?></div>
    </figcaption>
</figure>                
</div>

<?php  
} //fecha o laço while
} //fecha o try
catch(PDOException $e){
echo "Erro" .$e->getMessage();
}
?>
</center>
<!--FIM COMENTÁRIOS-->







        </span>   
 <!-- </div> -->
</li>
<?php 

} //fecha o laço while

 } //fecha o try
 catch(PDOException $e){
     echo "Erro" .$e->getMessage();
 }
?>		</div>

					</li>

				
				</ul>

			</div>

		</main>


		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="../js/dash.js" defer></script>
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
</body>

</html>