<?php 
    session_start();

include_once("valida-permanencia.php");
 
?>
<?php
require_once("../model/Postagem.php");
require_once("../model/PrestadorServico.php"); //FK

try {
  $postagem = new Postagem();
  $prestadorServico = new PrestadorServico(); //FK

  $listapostagem = $postagem->listar();
  $listaprestadorservico = $prestadorServico->listar(); //FK

} catch (Exception $e) {
  echo $e->getMessage();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link rel="stylesheet" href="../css/desh.css">

    
    <link rel="shortcut icon" href="./assets/images/Axolote.png" type="image/x-icon">

	<title>Axol (Área Restrita)</title>
</head>
<body>

  <!-- INICIO SIDEVAR -->
  <?php
include "../extend/sidevar3.inc"
  ?>
  <!-- FIM SIDEVAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Postagem</a>
			<form action="#">
			
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<i class='bx bx-user-circle'></i>			</a>
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Postagens</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Axol</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Acesso restrito</a>
						</li>
					</ul>
				</div>
				<!--BOTÃO RELATÓRIO-->

				<button  class="btn-download btn" type="submit">Atualizar
				<i class='bx bxs-cloud-download' ></i>
				</button>
				
			</div>
<br>
          </form>
		  		<!--FIM BOTÃO RELATÓRIO-->

            <!-- INICIO DE BLOCOS 3 QUARADOS -->
            <?php
            include "../extend/prestador.inc";
            ?>
            <!-- FIM DE 3 BLOCOS -->


            <div class="table-data">
				<div class="order">	
                    					
                    <h1>Inserir uma Postagem:</h1>
<br>
                    <form  action="cadastra-postagem.php" enctype="multipart/form-data" method="POST">
<h2>
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
<div class="order">
<input type="text" class="table-data" id="txtTituloPostagem" value="" name="txtTituloPostagem" placeholder="Titulo" required><br>
<input type="date" class="table-data" id="txtDataPostagem" value="" name="txtDataPostagem" required><br>
<textarea type="text" class="table-data" id="txtDescricaoPostagem" name="txtDescricaoPostagem" cols="50" rows="5" maxlength="250" placeholder="Descrição da Postagem:" required></textarea><br>
<input type="file" class="table-data" name="txtImgPostagem" id="txtImgPostagem" onchange="previewImagem()"><br><br>
			<img class="table-data"><br><br>
            <button  class="btn-danger btn" style="width: 50%; height: 50%;"type="submit">Publicar
				<i class='bx bxs-cloud-download' ></i>
				</button>
</div>	
		</form>		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script>
			function previewImagem(){
				var imagem = document.querySelector('input[name=txtImgPostagem]').files[0];
				var preview = document.querySelector('img');
				
				var reader = new FileReader();
				
				reader.onloadend = function () {
					preview.src = reader.result;
				}
				
				if(imagem){
					reader.readAsDataURL(imagem);
				}else{
					preview.src = "";
				}
			}
		</script>
        </div>	
        </div>	

            <!-------- exibe apenas o usuario logado ------>
        
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

    <script src="../js/dash.js" defer></script></body>
</html>
