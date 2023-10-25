<?php
require_once("../model/PrestadorServico.php");
/*require_once("../model/Horario.php"); //para FK
require_once("../model/Postagem.php"); //para FK*/

try {
  $prestadorServico = new PrestadorServico();
 /* $horario = new Horario(); //para FK
  $postagem = new Postagem(); //para FK*/
  
  $listaprestadorservico = $prestadorServico->listar();
  /*$listahorario = $horario->listar(); //para FK
  $listapostagem = $postagem->listar(); //para FK*/
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

				<form class="d-flex" role="search" action="../relatorios/relatorio-prestador.php" method="post">
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
						<h3>Lista Prestadores</h3>
            <!--FORMULÁRIO SISTEMA DE BUSCA-->
        <form class="d-flex" role="search" action="../buscaAdm/pesquisa-prestador.php" method="post">
            <input class="form-control me-2" type="search" placeholder="Pesquisar por nome" aria-label="Search" name="txtNome" id="txtNome">
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
          <th>CNPJ</th>
          <th>Email</th>
          <th>Senha</th>
          <th>Img</th>
          <th>Logradouro</th>
          <th>Complemento</th>
          <th>CEP</th>
          <th>Bairro</th>
          <th>Cidade</th>
          <th>UF</th>
         <!-- <th>CodHorario</th>
          <th>CodPostagem</th>-->
        </tr>
      </thead>

      <tbody>
        <?php foreach ($listaprestadorservico as $key => $listar) { ?>
            <tr>
                    <td><?php echo $codPrestadorServico = $listar['codPrestadorServico'] ?></td>
                    <td><?php echo $nomePrestadorServico = $listar['nomePrestadorServico'] ?></td>
                    <td><?php echo $cnpjPrestadorServico = $listar['cnpjPrestadorServico'] ?></td>
                    <td><?php echo $emailPrestadorServico = $listar['emailPrestadorServico'] ?></td>
                    <td><?php echo $senhaPrestadorServico = $listar['senhaPrestadorServico'] ?></td>
                    <td><?php echo $imgPrestadorServico = $listar['imgPrestadorServico'] ?></td>
                    <td><?php echo $logradouroPrestadorServico = $listar['logradouroPrestadorServico'] ?></td>
                    <td><?php echo $complementoPrestadorServico = $listar['complementoPrestadorServico'] ?></td>
                    <td><?php echo $cepPrestadorServico = $listar['cepPrestadorServico'] ?></td>
                    <td><?php echo $bairroPrestadorServico = $listar['bairroPrestadorServico'] ?></td>
                    <td><?php echo $cidadePrestadorServico = $listar['cidadePrestadorServico'] ?></td>
                    <td><?php echo $uf = $listar['uf'] ?></td>

            <?php

              $teste = array();

              array_push($teste, $nomePrestadorServico, $codPrestadorServico);
            ?>

                    <?php  $nomePrestadorServico = $listar['nomePrestadorServico'] ?>
                    <?php  $cnpjPrestadorServico = $listar['cnpjPrestadorServico'] ?>
                    <?php  $emailPrestadorServico = $listar['emailPrestadorServico'] ?>
                    <?php  $senhaPrestadorServico = $listar['senhaPrestadorServico'] ?>
                    <?php  $imgPrestadorServico = $listar['imgPrestadorServico'] ?>
                    <?php  $logradouroPrestadorServico = $listar['logradouroPrestadorServico'] ?>
                    <?php  $complementoPrestadorServico = $listar['complementoPrestadorServico'] ?>
                    <?php  $cepPrestadorServico = $listar['cepPrestadorServico'] ?>
                    <?php  $bairroPrestadorServico = $listar['bairroPrestadorServico'] ?>
                    <?php  $cidadePrestadorServico = $listar['cidadePrestadorServico'] ?>
                    <?php  $uf = $listar['uf'] ?>

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
                      <input type="text" class="form-control" id="txtNomePrestador" name="txtNomePrestador" value="<?php echo ($linha) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome Prestador</label>
                      <input type="text" class="form-control" id="txtNomePrestador" name="txtNomePrestador" value=<?php echo ($nomePrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CNPJ</label>
                      <input type="text" class="form-control" id="txtCpnjPrestador" name="txtCpnjPrestador" value=<?php echo ($cnpjPrestadorServico) ?>>
                    </div>
            
                <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="text" class="form-control" id="txtEmailPrestador" name="txtEmailPrestador" value=<?php echo ($emailPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Senha</label>
                      <input type="text" class="form-control" id="txtSenhaPrestador" name="txtSenhaPrestador" value=<?php echo ($senhaPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Imagem</label>
                      <input type="text" class="form-control" id="txtImagemPrestador" name="txtImagemPrestador" value=<?php echo ($imgPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Logradouro</label>
                      <input type="text" class="form-control" id="txtLogradouroPrestador" name="txtLogradouroPrestador" value=<?php echo ($logradouroPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Complemento</label>
                      <input type="text" class="form-control" id="txtComplementoPrestador" name="txtComplementoPrestador" value=<?php echo ($complementoPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CEP</label>
                      <input type="text" class="form-control" id="txtCepPrestador" name="txtCepPrestador" value=<?php echo ($cepPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Bairro</label>
                      <input type="text" class="form-control" id="txtBairroPrestador" name="txtBairroPrestador" value=<?php echo ($bairroPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="txtCidadePrestador" name="txtCidadePrestador" value=<?php echo ($cidadePrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Uf</label>
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
                  
                  <form method="post" action="decisao-editarPrestador.php"> <!--FORM ACTION -->
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                      <input type="text" class="form-control" id="txtNomePrestador" name="txtNomePrestador" value="<?php echo ($codPrestadorServico) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome Prestador</label>
                      <input type="text" class="form-control" id="txtNomePrestador" name="txtNomePrestador" value=<?php echo ($nomePrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CNPJ</label>
                      <input type="text" class="form-control" id="txtCpnjPrestador" name="txtCpnjPrestador" value=<?php echo ($cnpjPrestadorServico) ?>>
                    </div>
                  </form>
                </div>

                <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="text" class="form-control" id="txtEmailPrestador" name="txtEmailPrestador" value=<?php echo ($emailPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Senha</label>
                      <input type="text" class="form-control" id="txtSenhaPrestador" name="txtSenhaPrestador" value=<?php echo ($senhaPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Imagem</label>
                      <input type="text" class="form-control" id="txtImagemPrestador" name="txtImagemPrestador" value=<?php echo ($imgPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Logradouro</label>
                      <input type="text" class="form-control" id="txtLogradouroPrestador" name="txtLogradouroPrestador" value=<?php echo ($logradouroPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Complemento</label>
                      <input type="text" class="form-control" id="txtComplementoPrestador" name="txtComplementoPrestador" value=<?php echo ($complementoPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CEP</label>
                      <input type="text" class="form-control" id="txtCepPrestador" name="txtCepPrestador" value=<?php echo ($cepPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Bairro</label>
                      <input type="text" class="form-control" id="txtBairroPrestador" name="txtBairroPrestador" value=<?php echo ($bairroPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="txtCidadePrestador" name="txtCidadePrestador" value=<?php echo ($cidadePrestadorServico) ?>>
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
