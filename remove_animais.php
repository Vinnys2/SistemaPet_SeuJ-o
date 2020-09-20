  
<?php

$id = $_GET['id'];

include('conexao2.php');

$SQL = "DELETE FROM animal WHERE id=$id";
//echo SQL;

include('rodape_conexao.php');

header('location:cons_todos_animais.php');
?>