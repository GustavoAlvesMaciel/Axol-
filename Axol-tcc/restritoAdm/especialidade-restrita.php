<?php
require_once("../model/Especialidade.php");
require_once("../model/EspecialidadeServico.php"); // chamando por causa da FK

try {
  $especialidade = new Especialidade();
  $especialidadeServico = new EspecialidadeServico(); //FK
  
  $listaespecialidade = $especialidade->listar();
  $listaespecialidadeServico = $especialidadeServico->listar(); //FK

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

				<form class="d-flex" role="search" action="../relatorios/relatorio-especialidade.php" method="post">
				<button  class="btn-download btn" type="submit">Relatório
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
					<div class="head">
						<h3>Lista Especialidade Serviço</h3>
						 <!--FORMULÁRIO SISTEMA DE BUSCA-->
						 <form class="d-flex" role="search" action="../buscaAdm/pesquisa-especialidade.php" method="post">
            <input class="form-control me-2" type="search" placeholder="Pesquisar por nome da especialidade" aria-label="Search" name="txtNomeEspecialidade" id="txtNomeEspecialidade">
            <button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
          </form>
      <!--FORMULÁRIO SISTEMA DE BUSCA-->
					</div>
          <div id="container">
    <table>
	<thead>
        <tr>
          <th>Código</th>
          <th>Nome</th>
          <th>Espécie</th>
          <th>Código Especialidade Serviço</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($listaespecialidade as $key => $listar) { ?>
          <tr>

            <td><?php echo $codEspecialidade = $listar['codEspecialidade'] ?></td>

            <td><?php echo $nomeEspecialidade = $listar['nomeEspecialidade'] ?></td>

            <td><?php echo $especieEspecialidade = $listar['especieEspecialidade'] ?></td>

            <td><?php echo $codEspecialidadeServico = $listar['codEspecialidadeServico'] ?></td> <!--FK-->

            <?php
              $teste = array();

              array_push($teste, $nomeEspecialidade, $especieEspecialidade, $codEspecialidade);
            ?>


            <?php $nomeEspecialidade = $listar['nomeEspecialidade'] ?>
            <?php $especieEspecialidade = $listar['especieEspecialidade'] ?>
            <?php $codEspecialidadeServico = $listar['codEspecialidadeServico'] ?> <!--FK-->

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
                      <label for="exampleInputEmail1" class="form-label">ID</label>
                      <input type="text" class="form-control" id="txtNomeEspecialidade" name="txtNomeEspecialidade" value="<?php echo ($linha) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome Especialidade</label>
                      <input type="text" class="form-control" id="txtNomeEspecialidade" name="txtNomeEspecialidade" value=<?php echo ($nomeEspecialidade) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Especie Especialidade</label>
                      <input type="email" class="form-control" id="txtEspecieEspecialiadade" name="txtEspecieEspecialiadade" value=<?php echo ($especieEspecialidade) ?>>
                    </div>

                    <select name="especialidadeServico">
                        <option value="0">Selecione</option>
                        <?php foreach ($listaespecialidadeServico as $listar){ ?>
                            <option value="<?php echo $listar['codEspecialidadeServico'] ?>">
                                <?php echo $listar['codEspecialidadeServico'] ?>
                            </option>
                        <?php } ?>
                    </select>

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
                  <form method="post" action="decisao-editarEspecialidade.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Código Especialidade</label>
                      <input type="text" class="form-control" id="txtNomeEspecialidade" name="txtNomeEspecialidade" value="<?php echo ($codEspecialidade) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome Especialidade</label>
                      <input type="text" class="form-control" id="txtNomeEspecialidade" name="txtNomeEspecialidade" value=<?php echo ($nomeEspecialidade) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Especie Especialidade</label>
                      <input type="text" class="form-control" id="txtEspecieEspecialidade" name="txtEspecieEspecialidade" value=<?php echo ($especieEspecialidade) ?>>
                    </div>

                    <select name="especialidadeServico">
                        <option value="0">Selecione</option>
                        <?php foreach ($listaespecialidadeServico as $listar){ ?>
                            <option value="<?php echo $listar['codEspecialidadeServico'] ?>">
                                <?php echo $listar['codEspecialidadeServico'] ?>
                            </option>
                        <?php } ?>
                    </select>

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
