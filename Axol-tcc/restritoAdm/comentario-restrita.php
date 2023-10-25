<?php
require_once("../model/Comentario.php");
require_once("../model/Usuario.php"); // chamando por causa da FK
require_once("../model/Postagem.php"); // chamando por causa da FK


try {
  $comentario = new Comentario();
  $usuario  = new Usuario();
  $postagem = new Postagem();

  $listacomentario = $comentario->listar();
  $listausuario = $usuario->listar();
  $listapostagem = $postagem->listar();
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
    <link rel="stylesheet" href="../css/dash.css">
	<link rel="shortcut icon" href="./assets/images/Axolote.png" type="image/x-icon">

	<title>Axol (Área Restrita)</title>
</head>
<body>

		  		<!--FIM BOTÃO RELATÓRIO-->

  <!-- INICIO SIDEVAR -->
  <?php
include "../extend/sideAdm.inc"
  ?>
  <!-- FIM SIDEVAR -->


	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Cadastros</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Pesquisar...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
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
					<h1>Dashboard</h1>
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

				<form class="d-flex" role="search" action="../relatorios/relatorio-comentario.php" method="post">
				<button  class="btn-download btn" type="submit">Relatório
				<i class='bx bxs-cloud-download' ></i>
				</button>
				
			</div>
</form>

            <!-- INICIO DE BLOCOS 3 QUARADOS -->
            <?php
            include "../extend/prestador.inc";
            ?>
          	<!-- FIM DE 3 BLOCOS -->


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista Comentário</h3>
						 <!--FORMULÁRIO SISTEMA DE BUSCA-->
						 <form class="d-flex" role="search" action="../buscaAdm/pesquisa-comentario.php" method="post">
            <input class="form-control me-2" type="search" placeholder="Pesquisar por nome usuário" aria-label="Search" name="txtNomeUsuario" id="txtNomeUsuario">
            <button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
          </form>
      <!--FORMULÁRIO SISTEMA DE BUSCA-->
					</div>
					<div id="container">
    <table>
      <thead>
        <tr>
          <th>Código Comentário</th>
          <th>Descrição</th>
          <th>Nome Usuário</th>
		  <th>Descrição Postagem</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($listacomentario as $key => $listar) { ?>
          <tr>

            <td><?php echo $codComentario = $listar['codComentario'] ?></td> <!--variaveis com mesmos nomes do model e nome de campo igual do banco-->

            <td><?php echo $descricaoComentario = $listar['descricaoComentario'] ?></td>

            <td><?php echo $codUsuario = $listar['nomeUsuario'] ?></td> <!--FK-->

			<td><?php echo $codPostagem = $listar['descricaoPostagem'] ?></td>
            
            <?php
              $teste = array();

              array_push($teste, $descricaoComentario, $codComentario);
            ?>


            <?php $descricaoComentario = $listar['descricaoComentario'] ?>
            <?php $codUsuario = $listar['nomeUsuario'] ?> <!--FK-->
			<?php $codPostagem = $listar['descricaoPostagem'] ?> <!--FK-->
            
            </form>
          </tr>

          
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Alterar dados</h5>
                  <button type="button" class="btn-close" id="botao" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                      <label for="exampleInputEmail1" class="form-label">Código Comentário</label>
                      <input type="text" class="form-control" id="txtDescricao" name="txtDescricao" value="<?php echo ($linha) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Descrição</label>
                      <input type="text" class="form-control" id="txtDescricao" name="txtDescricao" value=<?php echo ($descricaoComentario) ?>>
                    </div>

					<div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Usuário</label>
                      <input type="text" class="form-control" id="Usuario" name="Usuario" value=<?php echo ($codUsuario) ?>>
                    </div>

					<div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Postagem</label>
                      <input type="text" class="form-control" id="Postagem" name="Postagem" value=<?php echo ($codPostagem) ?>>
                    </div>

                  </form>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-light" id="botao2">Salvar alterações</button>

                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Alterar dados</h5>
                  <button type="button" class="btn-close" id="botao" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <form method="post" action="decisao-editarComentario.php"> <!--FORM ACTION -->
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Código Comentário</label>
                      <input type="text" class="form-control" id="txtDescricao" name="txtDescricao" value="<?php echo ($codComentario) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Descrição</label>
                      <input type="text" class="form-control" id="txtDescricao" name="txtDescricao" value=<?php echo ($descricaoComentario) ?>>
                    </div>

					<div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Usuário</label>
                      <input type="text" class="form-control" id="Usuario" name="Usuario" value=<?php echo ($codUsuario) ?>>
                    </div>

					<div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Postagem</label>
                      <input type="text" class="form-control" id="Postagem" name="Postagem" value=<?php echo ($codPostagem) ?>>
                    </div>

                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-light" id="botao2">Salvar alterações</button>

                </div>
              </div>
            </div>
          <?php } ?>


      </tbody>
    </table>
  </div>
				
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

    <script src="../js/dash.js" defer></script></body>
</html>
