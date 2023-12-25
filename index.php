<?php
session_start();
isset($_SESSION['activo']);


if($_SESSION['activo']!='true'){

	header('location:login.php');
}



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="glanG/glanG.css">
	<title></title>
</head>
<body class="toGray">
<div class="glan-header">
	<hr>
	<h1>Afrikita</h1>
</div>
<br><br>

<div class="glan-nav">
<center>
<nav>
<li class="glan-btn-rosita"><a href="" class="glan-anchor">Home</a></li>
<li class="glan-btn-rosita"><a href="" class="glan-anchor">Blogs</a></li>
<li class="glan-btn-rosita"><a href="" class="glan-anchor">Pessoas</a></li>
<li class="glan-btn-rosita" style="background-color:red"><a href="unset.php" class="glan-anchor" >Terminar</a></li>
</nav>

</center>
</div>



<div class="glan-div-search-tools">
	<input type="" name=""><button>Pesquisar</button>
</div>

<div class="glan-etic">
	<h3>Pagina Inicial</h3>
</div>

<div>
	<h3 style="color:white;">Encontrar Pessoas</h3>
	<select name="paises">
  <option value="argelia">Argélia</option>
  <option value="angola">Angola</option>
  <option value="benin">Benin</option>
  <option value="botsuana">Botsuana</option>
  <option value="burkina-faso">Burkina Faso</option>
  <option value="burundi">Burundi</option>
  <option value="cabo-verde">Cabo Verde</option>
  <option value="camaroes">Camarões</option>
  <option value="chade">Chade</option>
  <option value="comoros">Comores</option>
  <option value="congo">Congo</option>
  <option value="republica-democratica-do-congo">República Democrática do Congo</option>
  <option value="costa-do-marfim">Costa do Marfim</option>
  <option value="djibouti">Djibuti</option>
  <option value="egito">Egito</option>
  <option value="eritreia">Eritreia</option>
  <option value="essuatini">Essuatíni</option>
  <option value="etiopia">Etiópia</option>
  <option value="gabon">Gabão</option>
  <option value="gambia">Gâmbia</option>
  <option value="gana">Gana</option>
  <option value="guine">Guiné</option>
  <option value="guine-bissau">Guiné-Bissau</option>
  <option value="guine-equatorial">Guiné Equatorial</option>
  <option value="lesoto">Lesoto</option>
  <option value="liberia">Libéria</option>
  <option value="libia">Líbia</option>
  <option value="madagascar">Madagascar</option>
  <option value="malawi">Malawi</option>
  <option value="mali">Mali</option>
  <option value="marrocos">Marrocos</option>
  <option value="mauricio">Maurício</option>
  <option value="mauritania">Mauritânia</option>
  <option value="mocambique">Moçambique</option>
  <option value="namibia">Namíbia</option>
  <option value="niger">Níger</option>
  <option value="nigeria">Nigéria</option>
  <option value="quenia">Quênia</option>
  <option value="republica-centro-africana">República Centro-Africana</option>
  <option value="ruanda">Ruanda</option>
  <option value="saara-ocidental">Saara Ocidental</option>
  <option value="santa-helena-ascensao-e-tristan-da-cunha">Santa Helena, Ascensão e Tristão da Cunha</option>
  <option value="sao-tome-e-principe">São Tomé e Príncipe</option>
  <option value="seicheles">Seicheles</option>
  <option value="senegal">Senegal</option>
  <option value="serra-leona">Serra Leoa</option>
  <option value="somalia">Somália</option>
  <option value="sudan">Sudão</option>
  <option value="sudan-do-sul">Sudão do Sul</option>
  <option value="swazilandia">Suazilândia</option>
  <option value="tanzania">Tanzânia</option>
  <option value="togo">Togo</option>
  <option value="tunísia">Tunísia</option>
  <option value="uganda">Uganda</option>
  <option value="zambia">Zâmbia</option>
  <option value="zimbabwe">Zimbábue</option>
</select>
<button>Buscar</button>
</div>
<hr>











</body>
</html>