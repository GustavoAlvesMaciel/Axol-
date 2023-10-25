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
			<a href="../restrito/nav-restrita.php">
				<i class='bx bxs-dashboard' ></i>
				<span class="text">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="../restrito/form-especialidade.php">
				<i class='bx bxs-shopping-bag-alt' ></i>
				<span class="text">Especialidade</span>
			</a>
		</li>
		<li>
			<a href="../restrito/form-especieanimal.php">
				<i class='bx bxs-doughnut-chart' ></i>
				<span class="text">Espécie Animal</span>
			</a>
		</li>
		<li>
			<a href="../restrito/form-horario.php">
				<i class='bx bxs-message-dots' ></i>
				<span class="text">Horário</span>
			</a>
		</li>
		<li>
			<a href="../restrito/form-comentario.php">
				<i class='bx bxs-message-dots' ></i>
				<span class="text">Comentário</span>
			</a>
		</li>
		<li>
			<a href="../restrito/form-postagem.php">
				<i class='bx bxs-message-dots' ></i>
				<span class="text">Postagem</span>
			</a>
		</li>
		<li>
			<a href="../restrito/form-prestador.php">
				<i class='bx bxs-message-dots' ></i>
				<span class="text">Prestador</span>
			</a>
		</li>
		<li>
			<a href="../restrito/form-telefonePrestador.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Prestador - Telefone</span>
			</a>
		</li>
		<li>
			 <a href="../restrito/form-especialidadeservico.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Especialidade - Serviço</span>
			</a>
		</li>
		<li>
			<a href="../restrito/form-animais.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Animais</span>
			</a>
		</li>
		<li>
			<a href="../restrito/especialidade-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Especialidade - CRUD</span> <!--CRUD Especialidade -->
			</a>
		</li>
		<li>
			<a href="../restrito/especieAnimal-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">EspecieAnimal - CRUD</span> <!--CRUD Espécie Animal-->
			</a>
		</li>
		<li>
			<a href="../restrito/horario-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Horário - CRUD</span> <!--CRUD Horário -->
			</a>
		</li>
		<li>
		<a href="../restrito/comentario-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Comentario - CRUD</span> <!--CRUD Comentário -->
			</a>
		</li>
		<li>
		<a href="../restrito/postagem-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Postagem - CRUD</span> <!--CRUD Postagem -->
			</a>
		</li>
		<li>
		<a href="../restrito/animais-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Animais - CRUD</span> <!--CRUD Animais-->
			</a>
		</li>
		<li>
		<a href="../restrito/especialidadeservico-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Especialidade Serviço - CRUD</span> <!--CRUD Especialidade Servico -->
			</a>
		</li>
		<li>
		<a href="../restrito/usuario-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Usuario - CRUD</span> <!--CRUD USUARIO-->
			</a>
		</li>
		<li>
			<a href="../restrito/prestador-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Prestador - CRUD</span> <!--CRUD PRESTADOR -->
			</a>
		</li>
		<li>
		<a href="../restrito/telefoneusuario-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Telefone usuario - CRUD</span> <!--CRUD Telefone Usuario-->
			</a>
		</li>
		<li>
		<a href="../restrito/telefoneprestador-restrita.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Telefone Prestador - CRUD</span> <!--CRUD Telefone Prestador-->
			</a>
		</li>
		<li>
			<a href="../graficos/graficos.php"> <!--Gráfico de Avaliação-->
				<i class='bx bxs-group' ></i>
				<span class="text">Gráfico-Avaliações</span>
			</a>
		</li>
		<li>
		<a href="../restrito/feed.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Feed</span> <!--Feed postagem -->
			</a>
		</li>
		<li>
		<a href="../restrito/pesquisa.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Pesquisa</span> <!--Pesquisa -->
			</a>
		</li>
		<li>
		<a href="../restrito/user-profile.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Perfil do Usuário</span> <!--Perfil do usuario-->
			</a>
		</li>
		<li>
		<a href="../geo/localizar.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Localizar</span> <!--GEOLOCALIZAÇÃO-->
			</a>
		</li>
	</ul>
	
	<ul class="side-menu">
		<li>
			<a href="../index.php">
				<i class='bx bxs-cog' ></i>
				<span class="text">Home</span>
			</a>
		</li>
		<li>
			<a href="../restrito/PerfilUser.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Perfil</span> <!--Perfil-->
			</a>
		</li>
		<li>
		<li>
			<a href="../restrito/logout.php" class="logout">
				<i class='bx bxs-log-out-circle' ></i>
				<span class="text">Sair</span>
			</a>
		</li>
	</ul>
</section>
<!-- SIDEBAR -->






