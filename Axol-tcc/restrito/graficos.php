<?php
session_start();
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "atualizadotcc";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
$v = 0;
$w = 0;
$x = 0;
$y = 0;
$z = 0;

//percorre o banco
$result_niveis_ava = "SELECT * FROM tbavaliacao ";
$resultado_niveis_ava = mysqli_query($conn, $result_niveis_ava);
while($row_niveis_ava = mysqli_fetch_assoc($resultado_niveis_ava)){
    if($row_niveis_ava['quantAvaliacao'] == "1"){
        $v++;
    } else  if($row_niveis_ava['quantAvaliacao'] == "2"){
        $w++;
      } else  if($row_niveis_ava['quantAvaliacao'] == "3"){
        $x++;
      } else  if($row_niveis_ava['quantAvaliacao'] == "4"){
        $y++;
    } if($row_niveis_ava['quantAvaliacao'] == "5" ){
        $z++;
    }
}
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['1',     <?=$v?>],
          ['2',     <?=$w?>],
          ['3',     <?=$x?>], //copia $x
          ['4',      <?=$y?>], //copia $y
          ['5',  <?=$z?>] //copia $z
          
        ]);
          //titulo do gráfico
        var options = {
          title: 'Gráfico de Avaliações'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

</script>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      <?php
$P = 0;
$U = 0;

/*    Testes do 2 gráfico 
   
$query_usuario = "SELECT COUNT(codPrestadorServico) AS qnt_cadastro FROM tbPrestadorServico";
$result_usuario = $pdo->prepare($query_usuario);
$result_usuario->execute();

$result_cadastro_ava = "SELECT COUNT(codPrestadorServico)FROM tbPrestadorServico 
";
$resultado_cadastro_ava = mysqli_query($conn, $result_cadastro_ava);
while($row_cadastro_ava_INT = mysqli_fetch_assoc($resultado_cadastro_ava)){
    $P= $row_cadastro_ava;
    }



$result_cadastro_ava = "SELECT COUNT( tbPrestadorServico.codPrestadorServico) FROM tbPrestadorServico ";
$resultado_cadastro_ava = mysqli_query($conn, $result_cadastro_ava);
while($row_cadastro_ava = mysqli_fetch_assoc($resultado_cadastro_ava)){
    $P = $row_cadastro_ava;
   }*/
?>

/*
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2014', <?=$P?>,  <?=$U?>,]
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
          
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
*/
</script>
</script>
</head>
<body>

    </script>
  </head>
  <body>
  </body>
</html>













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
  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['1',     <?=$v?>],
          ['2',     <?=$w?>],
          ['3',     <?=$x?>], //copia $x
          ['4',      <?=$y?>], //copia $y
          ['5',  <?=$z?>] //copia $z
          
        ]);
          //titulo do gráfico
        var options = {
          title: 'Gráfico:'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>
<!--
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', <?=$P?>,  <?=$U?>,]
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }-->
    </script>
  </head>
<body>

  <!-- INICIO SIDEVAR -->
  <?php
include "../extend/sidevar2.inc"
  ?>
  <!-- FIM SIDEVAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Gráfico de Avaliações</a>
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
					<h1>Gráfico</h1>
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
      </div>
			
			</div>
			
			<!-- INICIO SIDEVAR -->
			<?php
			include "../extend/grafic.inc"
			?>
  			<!-- FIM SIDEVAR -->


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Gráfico de Avaliações</h3>
						
					</div>
					<div id="container">
          <div id="piechart" style="width: 900px; height: 500px;"></div>
          <div id="columnchart_material" style="width: 100%; height: 500px;"></div>
          </div>
  </div>
  </div>	
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

    <script src="../js/dash.js" defer></script></body>
</html>
