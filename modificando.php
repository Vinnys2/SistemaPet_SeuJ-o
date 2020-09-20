<?php
	include('conexao2.php');

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$tipo = $_POST['tipo'];
	$raca = $_POST['raca'];
	$nome_dono = $_POST['nome_dono'];
	$rg_dono = $_POST['rg_dono'];

	
	
	$SQL = "UPDATE animal SET nome='$nome', tipo='$tipo', raca='$raca', nome_dono='$nome_dono', rg_dono='$rg_dono'  WHERE id=$id";
	

	// echo "$SQL";
	include('rodape_conexao.php');
	
	header('location:cons_todos_animais.php');
?>