<?php
	$host = 'localhost';
    $banco = 'atualizadotcc';
    $usuario = 'root';
    $senha = '';
    

	$pdo = new PDO("mysql:host=$host;dbname=$banco",$usuario,$senha);		
?>