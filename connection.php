<?php
  	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
  	$host = "localhost";
  	$user = "root";
  	$pass = "";
  	$banco = "libraryapp";
  	$conexao = mysql_connect($host, $user, $pass) or die ('Não foi possivel conectar: ' . mysql_error());
  	mysql_select_db($banco, $conexao) or die ('Não foi possivel conectar ao banco: ' . mysql_error());
?>
