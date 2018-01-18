<?php
	// Conexão Banco 
	$stringDeConexao='mysql:dbname=homestead;host=127.0.0.1';
	$user = 'homestead';
	$passwd = 'homestead';
	$conn = new PDO($stringDeConexao, $user, $passwd);
	
?>