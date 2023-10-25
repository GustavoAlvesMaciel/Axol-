<?php
include('../adm/Conexao.php');
?>

<!-- SIDEBAR -->
<section id="sidebar">
	<a href="../index.php" class="brand">
<img src="../assets/images/Axolote.png" width="60" height="60" loading="lazy" aria-hidden="true">
		<span class="text">Área Restrita</span>
	</a>
	<ul class="side-menu top">
		<li class="active">
			<a href="../loginUser/user-restrito.php">
				<i class='bx bxs-dashboard' ></i>
				<span class="text">Dashboard</span>
			</a>
		</li>

			<li>
		<a href="../restrito/pesquisa.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Encontre aqui!</span> <!--PESQUISADOR-->
			</a>
		</li>

		
		<li>
		<a href="../restrito/feed.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Feed</span> <!--Feed postagem -->
			</a>
		</li>

		<li>
		<a href="../restrito/PerfilUser.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Perfil do Usuário</span> <!--Perfil do usuario-->
			</a>
		</li>


	<li>
		<a href="../restrito/form-comentario.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Comentário</span> <!-- FORMULÁRIO COMENTÁRIO-->
			</a>
		</li>

	<li>
		<a href="../restrito/comentario-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Comentario - CRUD</span> <!--CRUD Comentário -->
			</a>
		</li>
		
		<li>
		<a href="../restrito/usuario-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Usuario - CRUD</span> <!--CRUD USUARIO-->
			</a>
		</li>
		
		<li>
		<a href="../restrito/telefoneusuario-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Telefone usuario - CRUD</span> <!--CRUD Telefone Usuario-->
			</a>
		</li>
	

	<ul class="side-menu">
		<li>
			<a href="../index.php">
				<i class='bx bxs-cog' ></i>
				<span class="text">Home</span>
			</a>
		</li>
		<li>
			<a href="../loginUser/logout-user.php" class="logout">
				<i class='bx bxs-log-out-circle' ></i>
				<span class="text">Sair</span>
			</a>
		</li>
	</ul>
</section>
<!-- SIDEBAR -->






