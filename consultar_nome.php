<?php
        include("cabecalho.inc");
?>
        
        
        <form action="consultar_animal.php" method="POST">
            <fieldset>
            <legend>Informe o nome do animal que deseja consultar</legend>
            <input type="text" name="nome_consulta" />
            <br>

			<input type = "submit" value = "Consultar"/>
            </fieldset>
			
		</form
<?php
    include ("rodape.inc.php")

?>