
<?php
require_once("../model/Horario.php");


try {
  $horario = new Horario();

  $listahorario = $horario->listar();
} catch (Exception $e) {
  echo $e->getMessage();
}
?>


<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../css/nav-restrita.css">

    <link rel="stylesheet" href="../css/form-horario.css">

    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Responsive Navigation Menu Bar</title>
</head>

<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="logo navLogo"><a href="#">Axol</a></span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">Axol</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="../entrar.php">Home</a></li>
                    <li><a href="../restrito/form-especialidade.php">Especialidade</a></li>
                    <li><a href="../restrito/form-especieanimal.php">EspecieAnimal</a></li>
                    <li><a href="<?php include 'form-horario';?>">Horario</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                    <div class="searchToggle">
                        <i class='bx bx-x cancel'></i>
                        <i class='bx bx-search search'></i>
                    </div>

                    <div class="search-field">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </div>
        </div>
    

        <?php include 'form-horario.php';?>

        <?php include 'form-especialidade';?>
    
    <script src="../js/script.js"></script>

</body>


</html>

