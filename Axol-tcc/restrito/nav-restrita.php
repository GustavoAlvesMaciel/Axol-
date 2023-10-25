<?php
session_start();
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
require_once("../model/TelefonePrestador.php");
require_once("../model/PrestadorServico.php"); // chamando por causa da FK


try {
  $telefonePrestador = new TelefonePrestador();
  $prestadorServico  = new PrestadorServico();


  $listatelefoneprestador = $telefonePrestador->listar();
  $listaprestadorServico = $prestadorServico->listar();
} catch (Exception $e) {
  echo $e->getMessage();
}

require_once("../model/Especialidade.php");


try {
  $especialidade = new Especialidade();
 
  $listaespecialidade = $especialidade->listar();
   //FK

} catch (Exception $e) {
  echo $e->getMessage();
}


require_once("../model/Especialidade.php"); // chamando por causa da FK
require_once("../model/PrestadorServico.php"); // chamando por causa da FK


try {
 
  $especialidade  = new Especialidade();
  $prestadorServico  = new PrestadorServico();


  $listaespecialidade = $especialidade->listar(); // Para FK
  $listaprestadorServico = $prestadorServico->listar(); // Para FK
} catch (Exception $e) {
  echo $e->getMessage();
}




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



require_once("../model/Postagem.php");
 // chamando por causa da FK


try {
  $postagem = new Postagem();
  $prestadorServico  = new PrestadorServico(); //FK

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
    <link rel="stylesheet" href="../css/desh.css">

    <link rel="shortcut icon" href="./assets/images/Axolote.png" type="image/x-icon">

	<title>Axol (Área Restrita)</title>
</head>
<body>

  <!-- INICIO SIDEVAR -->
  <?php
include "../extend/sidevar.inc"
  ?>
  <!-- FIM SIDEVAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Dashboard</a>
			<form action="#">
				<div class="form-input">
					
				</div>
			</form>
		
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

				<form class="d-flex" role="search" >
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
					<div class="head">
						<h3>Lista Prestadores</h3>
          
					</div>
					<div id="container">



            <!-------- exibe apenas o usuario logado ------>
            <table class="table table-hover">
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
                                    <th>Tipo de Servico</th>
                                    </tr>
                                </thead>
                            <tbody>


                        </div>
                        <!-- /tabela -->

                        <?php
                            //$consul =$_POST['consulta'];
                    
                            if (isset ($_SESSION['email'])){
                                //$pesquisa = $_POST["consulta"];
                           global $conexao;
                                $stmt1 = $pdo->prepare("SELECT 
                                 codPrestadorServico,nomePrestadorServico
                                            ,cnpjPrestadorServico,emailPrestadorServico,senhaPrestadorServico,imgPrestadorServico
                                            ,logradouroPrestadorServico,complementoPrestadorServico,cepPrestadorServico,bairroPrestadorServico
                                            ,cidadePrestadorServico,uf, tiposervico
                                FROM tbPrestadorServico
                                WHERE emailPrestadorServico LIKE '%$_SESSION[email]%'");
                                 $stmt1 ->execute();

                             
                                    while($row1 = $stmt1 ->fetch(PDO::FETCH_NUM)){
                                        echo ("<tr>");
                                        echo '<td width="60px">';
                                        echo (" " . $row1[0] . " ");
                                        echo '</td>';
                                        echo "<td>";
                                      
                                        echo " " .$row1[1]; 
                                        echo "<td>". $row1[2]."</td>";
                                        echo "<td>". $row1[3]."</td>";
                                        echo "<td>". $row1[4]. "</td>";
                                        echo "<td>". $row1[5]. "</td>";
                                        echo "<td>". $row1[6]. "</td>";
                                        echo "<td>". $row1[7]. "</td>";
                                        echo "<td>". $row1[8]. "</td>";
                                        echo "<td>". $row1[9]. "</td>";
                                        echo "<td>". $row1[10]. "</td>";
                                        echo "<td>". $row1[11]. "</td>";
                                        echo "<td>". $row1[12]. "</td>";
                                        /* <span>'. $row1[11]. '</span>'; */ 

                                        echo "<form action='decisao-editarPrestador.php' method='post'><br>
                                        <td><button type='submit' class='btn btn-secondary' name='linha' id='linha' a hreaf='../restrito/decisao-editarPrestador?cod=$row1[0]''>Editar</button></td><br>
                                    </form>";

                                echo "<form action='ExcluirPrestador.php' method='post'><br>
                                       <td><button type='submit' class='btn btn-danger' name='linha' id='linha' value='<?php echo  aqui bem o codigo?>'>Excluir</button></td><br>
                                      </form>";


                                    }
                                    } else{


                                }
                            
                                        echo "</tr>";
                                    echo '</td>';
                                echo ('</tr>');

                                            
                        ?>
                        </tbody>                        
                        </table>
                           
        <!---------------------- fim ------------------------------->




      </tbody>
    </table>
  </div>
  </div>


  <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista Horários</h3>

					</div>
					<div id="container">

          <table> 
	<thead>
        <tr>
          <th>Código</th>
          <th>Dia da semana</th>
          <th>Horario de abertura</th>
          <th>Horario de fechamento</th>
          <th>Nome Prestador</th>
        
        </tr>
      </thead>
          <?php
                            //$consul =$_POST['consulta'];
                    
                            if (isset ($_SESSION['email'])){
                                //$pesquisa = $_POST["consulta"];
                           global $conexao;
                                $stmt1 = $pdo->prepare( "SELECT 
                                 codHorario ,diaSemanaHorario, aberturaHorario, fechamentoHorario, tbPrestadorServico.nomePrestadorServico
                                FROM tbHorario inner join tbPrestadorServico on tbHorario.codPrestadorServico = tbPrestadorServico.codPrestadorServico
                                WHERE tbPrestadorServico.emailPrestadorServico LIKE '%$_SESSION[email]%'");
                                 $stmt1 ->execute();

                             
                                    while($row1 = $stmt1 ->fetch(PDO::FETCH_NUM)){
                                        echo ("<tr>");
                                        echo '<td width="60px">';
                                        echo (" " . $row1[0] . " ");
                                        echo '</td>';
                                        echo "<td>";
                                      
                                        echo " " .$row1[1]; 
                                        echo "<td>". $row1[2]."</td>";
                                        echo "<td>". $row1[3]."</td>";
                                        echo "<td>". $row1[4]."</td>";
                                        
                                     
                                        
                                      
                                        /* <span>'. $row1[11]. '</span>'; */ 

                                     

                                    }
                                    } else{


                                }
                                echo "<form action='decisao-editarHorario.php' method='post'><br>
                                <td><button type='submit' class='btn btn-secondary' name='linha' id='linha' a hreaf='./decisao-editarHorario.php'>Editar</button></td><br>
                            </form>";

                     /*   echo "<form action='ExcluirHorario.php' method='post'><br>
                               <td><button type='submit' class='btn btn-danger' name='linha' id='linha' value='<?php echo  aqui bem o codigo?>'>Excluir</button></td><br>
                              </form>";*/

                                        echo "</tr>";
                                    echo '</td>';
                                echo ('</tr>');

                                            
                        ?>
                        </tbody>                        
                        </table>
                        <!---------------------------------------------------------------------------->

      </tbody>
    </table>
  </div>
  </div>
  </div>





  <div class="order">
					<div class="head">
						<h3>Lista Telefone Prestador</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<div id="container">
          <table>
	<thead>
        <tr>
          <th>Código</th>
          <th>Número de Telefone</th>
          <th>Nome Prestador</th>
        
        </tr>
      </thead>
          <?php
                            //$consul =$_POST['consulta'];
                    
                            if (isset ($_SESSION['email'])){
                                //$pesquisa = $_POST["consulta"];
                           global $conexao;
                                $stmt1 = $pdo->prepare( "SELECT 
                                 codTelefonePrestadorServico ,numeroTelefonePrestadorServico, tbPrestadorServico.nomePrestadorServico
                                FROM tbTelefonePrestadorServico inner join tbPrestadorServico on tbTelefonePrestadorServico.codPrestadorServico = tbPrestadorServico.codPrestadorServico
                                WHERE tbPrestadorServico.emailPrestadorServico LIKE '%$_SESSION[email]%'");
                                 $stmt1 ->execute();

                             
                                    while($row1 = $stmt1 ->fetch(PDO::FETCH_NUM)){
                                        echo ("<tr>");
                                        echo '<td width="60px">';
                                        echo (" " . $row1[0] . " ");
                                        echo '</td>';
                                        echo "<td>";
                                      
                                        echo " " .$row1[1]; 
                                        echo "<td>". $row1[2]."</td>";
                                     
                                        
                                      
                                        /* <span>'. $row1[11]. '</span>'; */ 

                                        echo "<form action='decisao-editarTelefonePrestador.php' method='post'><br>
                                        <td><button type='submit' class='btn btn-secondary' name='linha' id='linha' a hreaf='./decisao-editarHorario.php'>Editar</button></td><br>
                                    </form>";

                                echo "<form action='ExcluirTelefonePrestador.php' method='post'><br>
                                       <td><button type='submit' class='btn btn-danger' name='linha' id='linha' value='<?php echo  aqui bem o codigo?>'>Excluir</button></td><br>
                                      </form>";


                                    }
                                    } else{


                                }
                            
                                        echo "</tr>";
                                    echo '</td>';
                                echo ('</tr>');

                                            
                        ?>
                        </tbody>                        
                        </table>
                        <!---------------------------------------------------------------------------->




      </tbody>
    </table>
  </div>
  </div>
  </div>
  
  
  <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista Especialidade </h3>
						 <!--FORMULÁRIO SISTEMA DE BUSCA-->
						 <form class="d-flex" role="search" action="../buscas/pesquisa-especialidade.php" method="post">
            <input class="form-control me-2" type="search" placeholder="Pesquisar por nome da especialidade" aria-label="Search" name="txtNomeEspecialidade" id="txtNomeEspecialidade">
            <button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
          </form>
      <!--FORMULÁRIO SISTEMA DE BUSCA-->
      	<!--BOTÃO RELATÓRIO-->

				<form class="d-flex" role="search" action="../relatorios/relatorio-especialidade.php" method="post">
				<button  class="btn btn-outline-danger" type="submit">Relatório
				<i class='bx bxs-cloud-download' ></i>
        </form>

				</button>
					</div>
          <div id="container">


          <table>
	<thead>
        <tr>
          <th>Código</th>
          <th>Especialidade</th>
          <th>Espécies</th>
          <th>Nome Prestador</th>
        </tr>
      </thead>
          <?php
                            //$consul =$_POST['consulta'];
                    
                            if (isset ($_SESSION['email'])){
                                //$pesquisa = $_POST["consulta"];
                           global $conexao;
                                $stmt1 = $pdo->prepare( "SELECT 
                                 codEspecialidade ,nomeEspecialidade,especieEspecialidade, tbPrestadorServico.nomePrestadorServico
                                FROM tbEspecialidade  inner join tbPrestadorServico on tbEspecialidade.codPrestadorServico = tbPrestadorServico.codPrestadorServico
                                WHERE tbPrestadorServico.emailPrestadorServico LIKE '%$_SESSION[email]%'");
                                 $stmt1 ->execute();

                             
                                    while($row1 = $stmt1 ->fetch(PDO::FETCH_NUM)){
                                        echo ("<tr>");
                                        echo '<td width="60px">';
                                        echo (" " . $row1[0] . " ");
                                        echo '</td>';
                                        echo "<td>";
                                      
                                        echo " " .$row1[1]; 
                                        echo "<td>". $row1[2]."</td>";
                                        echo "<td>". $row1[3]."</td>";

                                        
                                      
                                        /* <span>'. $row1[11]. '</span>'; */ 

                                        echo "<form action='decisao-editarEspecialidade.php' method='post'><br>
                                        <td><button type='submit' class='btn btn-secondary' name='linha' id='linha' a hreaf='./decisao-editarHorario.php'>Editar</button></td><br>
                                    </form>";

                                echo "<form action='decisao-excluirHorario.php' method='post'><br>
                                       <td><button type='submit' class='btn btn-danger' name='linha' id='linha' value='<?php echo  aqui bem o codigo?>'>Excluir</button></td><br>
                                      </form>";


                                    }
                                    } else{


                                }
                            
                                        echo "</tr>";
                                    echo '</td>';
                                echo ('</tr>');

                                            
                        ?>
                        </tbody>                        
                        </table>
                        <!---------------------------------------------------------------------------->
      </tbody>
    </table>
    </div>  
  </div>
  </div>




  <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista Postagem</h3>
						 <!--FORMULÁRIO SISTEMA DE BUSCA-->
						 <form class="d-flex" role="search" action="../buscas/pesquisa-postagem.php" method="post">
          				  <input class="form-control me-2" type="search" placeholder="Pesquisar por nome do prestador" aria-label="Search" name="txtNome" id="txtNome">
							<button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
						</form>
      					<!--FORMULÁRIO SISTEMA DE BUSCA-->
                <form class="d-flex" role="search" action="../relatorios/relatorio-postagem.php" method="post">
				<button  class="btn btn-outline-danger" type="submit">Relatório
				<i class='bx bxs-cloud-download' ></i>
        </form>
				</button>
					</div>
					<div id="container">

              
          <table>
	<thead>
        <tr>
          <th>Código</th>
          <th>Descrição</th>
          <th>IMG</th>
          <th>Titulo Postagem</th>
          <th>Data Postagem</th>
        </tr>
      </thead>
          <?php
                            //$consul =$_POST['consulta'];
                    
                            if (isset ($_SESSION['email'])){
                                //$pesquisa = $_POST["consulta"];
                           global $conexao;
                                $stmt1 = $pdo->prepare( "SELECT 
                                 codPostagem, descricaoPostagem, imgPostagem, tituloPostagem, dataPostagem, tbPrestadorServico.nomePrestadorServico
                                FROM tbPostagem  inner join tbPrestadorServico on tbPostagem.codPrestadorServico = tbPrestadorServico.codPrestadorServico
                                WHERE tbPrestadorServico.emailPrestadorServico LIKE '%$_SESSION[email]%'");
                                 $stmt1 ->execute();

                             
                                    while($row1 = $stmt1 ->fetch(PDO::FETCH_NUM)){
                                        echo ("<tr>");
                                        echo '<td width="60px">';
                                        echo (" " . $row1[0] . " ");
                                        echo '</td>';
                                        echo "<td>";
                                      
                                        echo " " .$row1[1]; 
                                        echo "<td>". $row1[2]."</td>";
                                        echo "<td>". $row1[3]."</td>";
                                        echo "<td>". $row1[4]."</td>";

                                        
                                      
                                        /* <span>'. $row1[11]. '</span>'; */ 

                                        echo "<form action='decisao-editarPostagem.php' method='post'><br>
                                        <td><button type='submit' class='btn btn-secondary' name='linha' id='linha' a hreaf='./decisao-editarHorario.php'>Editar</button></td><br>
                                    </form>";

                                echo "<form action='decisao-excluirHorario.php' method='post'><br>
                                       <td><button type='submit' class='btn btn-danger' name='linha' id='linha' value='<?php echo  aqui bem o codigo?>'>Excluir</button></td><br>
                                      </form>";


                                    }
                                    } else{


                                }
                            
                                        echo "</tr>";
                                    echo '</td>';
                                echo ('</tr>');

                                            
                        ?>
                        </tbody>                        
                        </table>
                        <!---------------------------------------------------------------------------->


      </tbody>
    </table>
  </div>
  </div>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

  <script src="../js/dash.js" defer></script></body>
</html>