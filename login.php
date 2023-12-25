<?php

include("dbprog.php");

$ligaDB= new conn();

$usuariaAleatoria=$ligaDB->randUsuaria();

$nomeCompleto=$usuariaAleatoria['p_nome'];




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="glanG/glanG.css">
	<title></title><script language="javascript" src="glanJS/basicfunctions.js"></script>
</head>
<body class="">
<div class="glan-header">
	<hr>
	<h1>Afrikita</h1>
</div>
<br><br>
<br>


<!----------PESSOA PAR SEGUIR----------------->
<div style="margin-right: 500px; margin-left: 10px; color: black; font-family: calibri;">

	<h1 style="color:dodgerblue;"> <span style="color: black;">Que tal conhecer </span> <b><u><?php  echo "$nomeCompleto?";   ?></u></b></h1>

	<?php



    		echo "

   <p><span style='color:dodgerblue'>$usuariaAleatoria[p_nome], é de ".strtoupper($usuariaAleatoria['pais'])."  </span> nasceu em  <span style='color:dodgerblue'>$usuariaAleatoria[data_de_nascimento]</span></p>


	";




	?>
     

     <div>
	<label style="color:black;">Deseja saber mais sobre a maria apois o login?</label> <label>Sim</label> <input type="checkbox" name="">
</div>

</div>


<!------------------------------>
<div class="glan-col-right">
    
    <h2 style="text-align:center;">Login</h2>
    <hr>

   <center>
   <form method="post" action="validar.php">
   	 <!----Dados Email--->
    <div>
    <label>Emial</label><br>
	<input type="email" name="email" id="email">
    </div>

       <!----Dados Senha--->
    <div>
    <label>Senha</label><br>
	<input type="password" name="senha" id="senha" onchange="verificar()">
    </div>

   <!---------Clique avancar--->
   <br>
    <div>
    	<button type="submit">Logar</button>
    </div>



  </form>
   <hr>
  <br>

  <label>Don't you have an account? click here to acess <a href="cadastrar-se.php">Criar uma conta</a></label>

	
   </center>
	
</div>
<hr>

</body>
</html>