<?php 
	try
	{	header('Content-Type: text/html;charset=utf-8');
		$conexao = new PDO("mysql:host=localhost;dbname=tcc_bd;","root","");
		$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexao -> query("SET NAMES 'utf8'");
	}
	catch(PODExeption $e)
	{
		echo $e->getMessage();
	}
?>