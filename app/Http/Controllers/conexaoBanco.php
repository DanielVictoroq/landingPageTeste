<?php
	// Conexão Banco
	$stringDeConexao='mysql:dbname=homestead;host=127.0.0.1';
	$user = 'root';
	$passwd = 'admin';
	$conn = new PDO($stringDeConexao, $user, $passwd);
?>
