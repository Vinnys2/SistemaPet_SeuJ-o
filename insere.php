<?php
        //capturei as informações do formulário
        $nome = $_POST["nome"];
        $tipo = $_POST["tipo"];
        $raca = $_POST["raca"];
		$nome_dono = $_POST["nome_dono"];
		$rg_dono = $_POST["rg"];

        //abrindo conexao com BD
        include('conexao2.php');


       
	
		$SQL = "Insert INTO animal (nome, tipo, raca, nome_dono, rg_dono)
                   Value ('$nome', '$tipo', '$raca', '$nome_dono','$rg_dono' )";

            // Executa o comando sql e adiciona os dados no banco


        $texto = "Dados inseridos com sucesso<br/>";
   
        include('rodape_conexao.php');
 

?>