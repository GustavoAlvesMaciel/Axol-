<?php
include('../adm/Conexao.php');

?>
<head>
<link rel="stylesheet" type="text/css" href="../css/estilo.css" media="all">

</head>

<!-- <br><br><br><br><br><br>ESPAÇO PARA APARECER O SISTEMA DE FILTRO -->

<!-- FORMULÁRIO SISTEMA DE BUSCA
<div class="texto-index">
<h3>Busque e descubra!</h3>
<p>Pesquise e encontre as empresas próximas de acordo com a sua localidade</p>
</div>

<div class="container-two">
 <form method="POST" action=""><!--../cards/busca-cliente.php-->
   <!-- <div class="main">

     <div class="dropdown">

       <select name="tituloPostagem" id="tituloPostagem">
         <option selected disabled>Selecionar categoria</option>
         <?php //Percorrendo o array
         foreach ($lista as $linha) { ?>
           <option value="<?php echo $linha['tituloPostagem'] ?>">
             <?php echo $linha['tituloPostagem'] ?></option>
         <?php }; ?>
       </select>
     </div>

     <div class="search-box">
       <div class="searchbar">
         <i class="fas fa-search"></i>
         <input name="titulo_postagem" id="keyword" type="text" placeholder="Use palavras-chave...">
       </div>

       <div class="location">
         <div class="searchbar">
           <i class="fas fa-map-marker-alt" _mstvisible="2"></i>
           <input name="endereco" id="endereco" type="text" placeholder="Bairro...">
         </div>

       </div>

       <div class="button">
         <button type="submit" name="pesqPrestador" id="pesqPrestador">Procurar</button>
       </div>
     </div>
   </div>
 </form>
</div>
</div> --> 

<div class="containeri">
 <div class="titulo">
   <h3>Postagens recentemente</h3>
 </div>

<!--FORMULÁRIO SISTEMA DE BUSCA-->



<!--CARDS COM INFORMAÇÕES VINDAS DO BANCO-->

<!-- MAIN -->
<main>

<?php 
     try{
       $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
       //var_dump($dados);
       $nome = "%".$dados['titulo_postagem']."%";

         $stmt = $pdo->prepare("SELECT descricaoPostagem, imgPostagem, tituloPostagem, dataPostagem FROM tbpostagem
         INNER JOIN tbprestadorservico ON tbprestadorservico.codPrestadorServico = tbpostagem.codPrestadorServico
         WHERE tituloPostagem LIKE :titulo ORDER BY tituloPostagem ASC");
         $stmt->bindParam(':titulo', $nome, PDO::PARAM_STR);
         $stmt->execute();

         while($row = $stmt->fetch(PDO::FETCH_BOTH)){  ?>
                              

  <div class="divcenter">
    
    
    <ul class="boxposts">
 <li>
        <!-- <span class="thumb"></span> -->
             <img <?php echo "src='../restrito/imagens/".$row['imgPostagem']."'"; ?> width="166" height="166">
        </span>
        <span class="content">
             <h1 name="tituloPostagem"><?php  echo $row['tituloPostagem']. "<br>";?></h1>
             <p> <?php echo"Descricao: " .$row['descricaoPostagem']. "<br>";?></p>
             <span > <?php echo"Data da Publicação: " .$row['dataPostagem']. "<br>";?></span>
        </span>"            
 <!-- </div> -->
</li>
<?php 

} //fecha o laço while

 } //fecha o try
 catch(PDOException $e){
     echo "Erro" .$e->getMessage();
 }
?>

</main>
<!-- FIM MAIN -->
</section>
<!-- CONTENT -->

