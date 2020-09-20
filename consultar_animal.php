<?php
 
 
 
   include('conexao2.php');
	
  if(!empty($_POST))
  {
    $nome_consulta = $_POST["nome_consulta"];
    $SQL = "SELECT id, nome, tipo, raca, nome_dono, rg_dono FROM animal where nome = " . $nome_consulta . " ";
	
    // Não usa o include do rodape_conexão para não ficar grande e os comandos também são diferentes.
    $informacoes = mysqli_query($con, $SQL);
    if ($informacoes){

        

       while (($resultado =  mysqli_fetch_array($informacoes)) != null )
       {

        echo "<fieldset>";
          
         echo  $resultado[0] . " - 
			 " . $resultado[1] . " - 
			 ". $resultado[2] . " - 
			 ". $resultado[3] . " - 
			  ". $resultado[4] . "-
			 ". $resultado[5] . "<br>";
         
         echo "</fieldset>";   

         //Esse comando está selecionando todos automaticamente (estrutura de repetição.) e o != null significa diferente de nulo.
       }
      }else
	  {
		  mysqli_error($con);
	  }
    

    
  }
    mysqli_close($con)

  

?>