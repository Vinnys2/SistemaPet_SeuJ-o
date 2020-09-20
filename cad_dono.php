<?php
        include("cabecalho.inc.php");
?>

<?php


        echo '
           <form action =  "insere2.php" method="POST">
                <fieldset>
                   <legend>Cadastrar  Dono</legend> 
                   
						<label>RG:</label>
                        <input type = "text" name = "rg" />
                        <br>
				   
                        <label>Nome:</label>
                        <input type = "text" name = "nome_dono" />
                        <br>

                              
                        <input type = "submit" value = "Cadastrar" />
                </fieldset>
           </form>
        ';
?>

<?php
        include("rodape.inc.php");

?>