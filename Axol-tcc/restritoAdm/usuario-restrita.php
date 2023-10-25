<?php
require_once("../model/Usuario.php");

try {
  $usuario = new Usuario();

  
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

				<form class="d-flex" role="search" action="../relatorios/relatorio-usuario.php" method="post">
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
						<h3>Lista Usuário</h3>
            <!--FORMULÁRIO SISTEMA DE BUSCA-->
        <form class="d-flex" role="search" action="../buscaAdm/pesquisa-usuario.php" method="post">
            <input class="form-control me-2" type="search" placeholder="Pesquisar por nome" aria-label="Search" name="txtNomeUsuario" id="txtNomeUsuario">
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
          <th>Data</th>
          <th>Genero</th>
          <th>CPF</th>
          <th>Email</th>
          <th>Senha</th>
          <th>Imagem</th>
          <th>Logradouro</th>
          <th>Complemento</th>
          <th>CEP</th>
          <th>Bairro</th>
          <th>Cidade</th>
          <th>Uf</th>
        </tr>
      </thead>

      <tbody>
      <?php foreach ($listausuario as $key => $listar) { ?>
            <tr>
                    <td><?php echo $codUsuario = $listar['codUsuario'] ?></td>
                    <td><?php echo $nomeUsuario = $listar['nomeUsuario'] ?></td>
                    <td><?php echo $dataNascUsuario = $listar['dataNascUsuario'] ?></td>
                    <td><?php echo $sexoUsuario = $listar['sexoUsuario'] ?></td>
                    <td><?php echo $cpfUsuario = $listar['cpfUsuario'] ?></td>
                    <td><?php echo $emailUsuario = $listar['emailUsuario'] ?></td>
                    <td><?php echo $senhaUsuario = $listar['senhaUsuario'] ?></td>
                    <td><?php echo $imagemUsuario = $listar['imagemUsuario'] ?></td>
                    <td><?php echo $logradouroUsuario = $listar['logradouroUsuario'] ?></td>
                    <td><?php echo $complementoUsuario = $listar['complementoUsuario'] ?></td>
                    <td><?php echo $cepUsuario = $listar['cepUsuario'] ?></td>
                    <td><?php echo $bairroUsuario = $listar['bairroUsuario'] ?></td>
                    <td><?php echo $cidadeUsuario = $listar['cidadeUsuario'] ?></td>
                    <td><?php echo $uf = $listar['uf'] ?></td>
                    
            <?php

              $teste = array();

              array_push($teste, $nomeUsuario, $codUsuario);
            ?>




            <?php $nomeUsuario = $listar['nomeUsuario'] ?>
            <?php $dataNascUsuario = $listar['dataNascUsuario'] ?>
            <?php $sexoUsuario = $listar['sexoUsuario'] ?>
            <?php $cpfUsuario = $listar['cpfUsuario'] ?>
            <?php $emailUsuario = $listar['emailUsuario'] ?>
            <?php $senhaUsuario = $listar['senhaUsuario'] ?>
            <?php $imagemUsuario = $listar['imagemUsuario'] ?>
            <?php $logradouroUsuario = $listar['logradouroUsuario'] ?>
            <?php $complementoUsuario = $listar['complementoUsuario'] ?>
            <?php $cepUsuario = $listar['cepUsuario'] ?>
            <?php $bairroUsuario = $listar['bairroUsuario'] ?>
            <?php $cidadeUsuario = $listar['cidadeUsuario'] ?>
            <?php $uf = $listar['uf'] ?>

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
                      <input type="text" class="form-control" id="txtNomeUsuario" name="txtNomeUsuario" value="<?php echo ($linha) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome Usuário</label>
                      <input type="text" class="form-control" id="txtNomeUsuario" name="txtNomeUsuario" value=<?php echo ($nomeUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Data</label>
                      <input type="date" class="form-control" id="txtData" name="txtData" value=<?php echo ($dataNascUsuario) ?>>
                    </div>
                  </form>
                </div>

                <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Genero</label>
                      <input type="text" class="form-control" id="txtSexoUsuario" name="txtSexoUsuario" value=<?php echo ($sexoUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CPF</label>
                      <input type="text" class="form-control" id="txtCpfUsuario" name="txtCpfUsuario" value=<?php echo ($cpfUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="text" class="form-control" id="txtEmailUsuario" name="txtEmailUsuario" value=<?php echo ($emailUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Senha</label>
                      <input type="text" class="form-control" id="txtSenhaUsuario" name="txtSenhaUsuario" value=<?php echo ($senhaUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Imagem</label>
                      <input type="text" class="form-control" id="txtImagemUsuario" name="txtImagemUsuario" value=<?php echo ($imagemUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Logradouro</label>
                      <input type="text" class="form-control" id="txtLogradouroUsuario" name="txtLogradouroUsuario" value=<?php echo ($logradouroUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Complemento</label>
                      <input type="text" class="form-control" id="txtComplementoUsuario" name="txtComplementoUsuario" value=<?php echo ($complementoUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CEP</label>
                      <input type="text" class="form-control" id="txtCepUsuario" name="txtCepUsuario" value=<?php echo ($cepUsuario) ?>>
                    </div>


                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Bairro</label>
                      <input type="text" class="form-control" id="txtBairroUsuario" name="txtBairroUsuario" value=<?php echo ($bairroUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="txtCidadeUsuario" name="txtCidadeUsuario" value=<?php echo ($cidadeUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="uf" name="uf" value=<?php echo ($uf) ?>>
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
                  
                  <form method="post" action="decisao-editarUsuario.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Código</label>
                      <input type="text" class="form-control" id="txtNomeUsuario" name="txtNomeUsuario" value="<?php echo ($codUsuario) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="txtNomeUsuario" name="txtNomeUsuario" value=<?php echo ($nomeUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Data</label>
                      <input type="text" class="form-control" id="txtData" name="txtData" value=<?php echo ($dataNascUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Genero</label>
                      <input type="text" class="form-control" id="txtSexoUsuario" name="txtSexoUsuario" value=<?php echo ($sexoUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CPF</label>
                      <input type="text" class="form-control" id="txtCpfUsuario" name="txtCpfUsuario" value=<?php echo ($cpfUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="text" class="form-control" id="txtEmailUsuario" name="txtEmailUsuario" value=<?php echo ($emailUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Senha</label>
                      <input type="text" class="form-control" id="txtSenhaUsuario" name="txtSenhaUsuario" value=<?php echo ($senhaUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Imagem</label>
                      <input type="text" class="form-control" id="txtImagemUsuario" name="txtImagemUsuario" value=<?php echo ($imagemUsuario) ?>>
                    </div>


                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Logradouro</label>
                      <input type="text" class="form-control" id="txtLogradouroUsuario" name="txtLogradouroUsuario" value=<?php echo ($logradouroUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Complemento</label>
                      <input type="text" class="form-control" id="txtComplementoUsuario" name="txtComplementoUsuario" value=<?php echo ($complementoUsuario) ?>>
                    </div>


                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CEP</label>
                      <input type="text" class="form-control" id="txtCepUsuario" name="txtCepUsuario" value=<?php echo ($cepUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Bairro</label>
                      <input type="text" class="form-control" id="txtBairroUsuario" name="txtBairroUsuario" value=<?php echo ($bairroUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="txtCidadeUsuario" name="txtCidadeUsuario" value=<?php echo ($cidadeUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="uf" name="uf" value=<?php echo ($uf) ?>>
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


      </tbody>
    </table>
  </div>
				
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

    <script src="../js/dash.js" defer></script></body>
</html>
