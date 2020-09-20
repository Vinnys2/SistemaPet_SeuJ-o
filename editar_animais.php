<?php
	
	include('conexao2.php'); // abrindo o banco
	$id = $_GET['id'];
	$SQL = "SELECT * FROM animal WHERE id = $id";
	
	$editar = mysqli_query($con, $SQL); // Consultando e alterando a partir daqui
	
	if($editar){ //Verificando se o editar possui informações
		if(mysqli_num_rows($editar) == 1){
		
			while(($resultado = mysqli_fetch_assoc($editar)) != null){
				$id = $resultado['id'];
				$nome = $resultado['nome'];
				$tipo = $resultado['tipo'];
				$raca = $resultado['raca'];
				$nome_dono = $resultado['nome_dono'];
				$rg_dono = $resultado["rg_dono"];
			}		
		}
		else{
			echo "Não existe cadastro com essas informações";
		}
	}
	else{
		echo mysqli_error ($con);
	}
	// formulario para enviar para uma outra pagina, e assim modificar através do update
	echo' 
	<form action="modificando.php" method="POST">
		<fieldset>
			<Legend>Modificar informações do animal</legend>
				<input type="hidden" name="id" value="'.$id.'"/> 
				<br>
				
				<label>Nome:</label>
				<input type="text" name="nome" value="'.$nome.'"/>
				<br>
				
				<label>Tipo:</label>
				<input type="text" name="tipo" value="'.$tipo.'"/>
				<br>
				
				<label>Raça:</label>
				<input type="text" name="raca" value="'.$raca.'"/>
				<br>
				
				<label>Nome_Dono:</label>
				<input type="text" name="nome_dono" value="'.$nome_dono.'"/>
				<br>
				
				<label>RG_Dono:</label>
				<input type="text" name="tipo" value="'.$rg_dono.'"/>
				<br>
				
			
		
			<input type="submit" value="Modificar">		
		</fieldset>
	</form>	
	';

	mysqli_close($con);

?>