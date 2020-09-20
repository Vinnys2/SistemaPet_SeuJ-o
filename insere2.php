<?php
        //capturei as informações do formulário
		$nome_dono = $_POST["nome_dono"];
		$RG = $_POST["rg"];

        //abrindo conexao com BD
        include('conexao2.php');


        $SQL = "Insert INTO dono (rg_dono, nome)
                   Value ('$rg_dono', '$nome')";
		

            // Executa o comando sql e adiciona os dados no banco


        $texto = "Dono cadastrado com sucesso<br/>";
   
        include('rodape_conexao.php');
 

?>
<br>
<a href="menu.php">Voltar</a>