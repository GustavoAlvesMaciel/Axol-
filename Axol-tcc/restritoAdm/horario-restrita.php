<?php
require_once("../model/Horario.php");
require_once("../model/PrestadorServico.php"); // chamando por causa da FK

try {
  $horario = new Horario();
  $prestadorServico  = new PrestadorServico(); //FK

  $listahorario = $horario->listar();
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

			<form class="d-flex" role="search" action="../relatorios/relatorio-horario.php" method="post">
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
						<h3>Lista Horários</h3>
<!--FORMULÁRIO SISTEMA DE BUSCA-->
<form class="d-flex" role="search" action="../buscaAdm/pesquisa-horario.php" method="post">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" name="txtNome" id="txtNome">
            <button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
          </form>
      <!--FORMULÁRIO SISTEMA DE BUSCA-->
					</div>
					<div id="container">
    <table>
	<thead>
        <tr>
          <th>Código</th>
          <th>Dias</th>
          <th>Abertura</th>
          <th>Fechamento</th>
          <th>Nome Prestador</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($listahorario as $key => $listar) { ?>
          <tr>

            <td><?php echo $codHorario = $listar['codHorario'] ?></td>

            <td><?php echo $diaSemanaHorario = $listar['diaSemanaHorario'] ?></td>

            <td><?php echo $aberturaHorario = $listar['aberturaHorario'] ?></td>

            <td><?php echo $fechamentoHorario = $listar['fechamentoHorario'] ?></td>

            <td><?php echo $codPrestadorServico = $listar['nomePrestadorServico'] ?></td> <!--FK-->

            <?php
              $teste = array();

              array_push($teste, $diaSemanaHorario, $aberturaHorario, $fechamentoHorario, $codHorario);
            ?>


            <?php $diaSemanaHorario = $listar['diaSemanaHorario'] ?>
            <?php  $aberturaHorario = $listar['aberturaHorario'] ?>
            <?php $fechamentoHorario = $listar['fechamentoHorario'] ?>
            <?php $codPrestadorServico = $listar['nomePrestadorServico'] ?> <!--FK-->
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
                      <input type="text" class="form-control" id="txtDiaSemanaHorario" name="txtDiaSemanaHorario" value="<?php echo ($linha) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Dias da Semana</label>
                      <input type="text" class="form-control" id="txtNoDiaSemanaHorario" name="txtDiaSemanaHorario" value=<?php echo ($diaSemanaHorario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Horario Abertura</label>
                      <input type="text" class="form-control" id="txtHorarioAbertura" name="txtHorarioAbertura" value=<?php echo ($aberturaHorario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Fechamento Horario</label>
                      <input type="text" class="form-control" id="txtFechamentoHorario" name="txtFechamentoHorario" value=<?php echo ($fechamentoHorario) ?>>
                    </div>


                    <select name="Prestador">
                        <option value="0">Selecione</option>
                        <?php foreach ($listaprestadorservico as $listar){ ?>
                            <option value="<?php echo $listar['codPrestadorServico'] ?>">
                                <?php echo $listar['codPrestadorServico'] ?>
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
                  <form method="post" action="./decisao-editarHorario.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Código Especialidade</label>
                      <input type="text" class="form-control" id="txtDiaSemanaHorario" name="txtDiaSemanaHorario" value="<?php echo ($codHorario) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Dias da Semana</label>
                      <input type="text" class="form-control" id="txtDiaSemanaHorario" name="txtDiaSemanaHorario" value="<?php echo ($diaSemanaHorario) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Abertura Horário</label>
                      <input type="text" class="form-control" id="txtAberturaHorario" name="txtAberturaHorario" value=<?php echo ($aberturaHorario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Fechamento Horario</label>
                      <input type="text" class="form-control" id="txtFechamentoHorario" name="txtFechamentoHorario" value=<?php echo ($fechamentoHorario) ?>>
                    </div>


                    <select name="Prestador">
                        <option value="0">Selecione</option>
                        <?php foreach ($listaprestadorservico as $listar){ ?>
                            <option value="<?php echo $listar['codPrestadorServico'] ?>">
                                <?php echo $listar['codPrestadorServico'] ?>
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


      </tbody>
    </table>
  </div>
				
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

    <script src="../js/dash.js" defer></script></body>
</html>
