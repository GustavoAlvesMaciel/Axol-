<?php
require_once("../model/TelefoneUsuario.php");
require_once("../model/Usuario.php"); // chamando por causa da FK


try {
  $telefoneUsuario = new TelefoneUsuario();
  $usuario  = new Usuario();

  $listatelefoneusuario = $telefoneUsuario->listar();
  $listausuario = $usuario->listar();
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
					<button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
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
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Baixar PDF</span>
				</a>
			</div>

            <!-- INICIO DE BLOCOS 3 QUARADOS -->
            <?php
            include "../extend/prestador.inc";
            ?>
          	<!-- FIM DE 3 BLOCOS -->
	
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista Telefone Usúario</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<div id="container">
    <table>
    <thead>
        <tr>
          <th>Código Telefone</th>
          <th>Número</th>
          <th>Código do Usuário</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($listatelefoneusuario as $key => $listar) { ?>
          <tr>

            <td><?php echo $codTelefoneUsuario = $listar['codTelefoneUsuario'] ?></td>

            <td><?php echo $numeroTelefoneUsuario = $listar['numeroTelefoneUsuario'] ?></td>

            <td><?php echo $codUsuario = $listar['nomeUsuario'] ?></td> <!--FK-->
            
            <?php
              $teste = array();

              array_push($teste, $numeroTelefoneUsuario, $codTelefoneUsuario);
            ?>




            <?php $numeroTelefoneUsuario = $listar['numeroTelefoneUsuario'] ?>
            <?php $codUsuario= $listar['nomeUsuario'] ?> <!--FK-->
            
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
                      <label for="exampleInputEmail1" class="form-label">Código Telefone</label>
                      <input type="text" class="form-control" id="txtNumero" name="txtNumero" value="<?php echo ($linha) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Número</label>
                      <input type="text" class="form-control" id="txtNumero" name="txtNumero" value=<?php echo ($numeroTelefoneUsuario) ?>>
                    </div>

                    <select name="Usuario">
                        <option value="0">Selecione</option>
                        <?php foreach ($listausuario as $listar){ ?>
                            <option value="<?php echo $listar['codUsuario'] ?>">
                                <?php echo $listar['codUsuario'] ?>
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

                  <form method="post" action="decisao-editarTelefonePrestador.php"> <!--FORM ACTION -->
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Código Telefone</label>
                      <input type="text" class="form-control" id="txtNumero" name="txtNumero" value="<?php echo ($codTelefoneUsuario) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Número</label>
                      <input type="text" class="form-control" id="txtNumero" name="txtNumero" value=<?php echo ($numeroTelefoneUsuario) ?>>
                    </div>

                    <select name="Usuario">
                        <option value="0">Selecione</option>
                        <?php foreach ($listausuario as $listar){ ?>
                            <option value="<?php echo $listar['codUsuario'] ?>">
                                <?php echo $listar['codUsuario'] ?>
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
