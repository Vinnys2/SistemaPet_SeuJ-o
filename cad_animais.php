<?php
        include("cabecalho.inc.php");
?>

<?php


        echo '
           <form action =  "insere.php" method="POST">
                <fieldset>
                   <legend>Cadastrar  Animal</legend> 
                   
                        <label>Nome:</label>
                        <input type = "text" name = "nome" />
                        <br>

                        <label>Tipo:</label>
                        <input type = "text" name = "tipo" />
                        <br>

                        <label>Raça:</label>
                        <input type = "text" name = "raca" />
                        <br>
				
                                        
                        
                        
                        
                </fieldset>
				<Fieldset>
					<legend>Cadastro do Dono</legend>
						<label>RG:</label>
                        <input type = "text" name = "rg" />
                        <br>
				   
                        <label>Nome:</label>
                        <input type = "text" name = "nome_dono" />
                        <br>

				</Fieldset>
				<input type = "submit" value = "Cadastrar" />
           </form>
        ';
?>

<?php
        include("rodape.inc.php");

?>