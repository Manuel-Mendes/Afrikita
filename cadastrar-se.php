<?php

include("dbprog.php");

$ligaDB= new conn();

$usuariaAleatoria=$ligaDB->randUsuaria();

$nomeCompleto=$usuariaAleatoria['p_nome']." ".$usuariaAleatoria['s_nome'];




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


<div class="div-field">

 <form method="post" action="store_user.php">
  <!----DADOS PESSOAIS--->
  <div>
     <h4>Dados Pessoas</h4>
     <hr>
    <label>Primeiro Nome</label><br>
    <input type="text" name="cPNome" id="iNome"><br>

    <label>Segundo Nome</label><br>
    <input type="text" name="cSNome" id="iNome"><br>

    <label>Apelido</label><br>
    <input type="text" name="cONome" id="iNome"><br>
     <br>
     

    <!------------Add NACIONALIDADE---->



  <label>Nacionalidade</label><br>
  <select name="paises" style="width:100px">
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
</select><br>


    <!------Frim------>




  <br>
    <strong> Genero</strong>
    <select name="cGen">
      <option>F</option>
    </select>
    <br>
    <br>
     <label>Data de Nascimento</label><br>
     <input type="date" name="cDate" >
  </div>
  
  
  <!----------Dados de Acesso---->
  <div style="float: right; margin-top:-350px">
     <h4>Dados de Acesso</h4><br>

    <label>Email</label><br>
    <input type="email" name="eMail" id="iEmail"><br>

      <label>Senha</label><br>
    <input type="password" name="ePassword" id="iPassword"><br>

    <label>Confirmar Senha</label><br>
    <input type="password" name="ePassword2" id="iPassword"><br>

    <label>Telefone</label><br>
    <input type="text" name="cContato"><br>

    <label>Tipo de conta</label><br>
    <select name="tConta">
      <option>Normal</option>
      <option>Blogger</option>
      <option>Infuencer</option>
      <option>Modelo</option>
      <option>Criadora de Conteudo</option>
      <option>Usuaria Normal</option>
      <option>Apoiadora da Rede</option>
      <option>Outro</option>

    </select>

  </div>
  
  <br>

  <div>
    <center>
   <button type="submit">Criar conta</button>
  </center>
  </div>

 <hr>
 <div>
  <h5 style="text-align: center;"> Não consegue acessar?</h5>
   <a href="login.php">Ja estou registrada| </a>
   <a href="login.php">Perdi a minha conta| </a>
   <a href="login.php">Fui hackeada</a>
 </div>

 <div>

  <h6>Na vergar em</h6>
   <select> 

    <option>Português</option>
    <option>Inglês</option>
    <option>Espanhol</option>
    <option>Francês</option>
    <option>Deutch</option>
    <option>Italiano</option>

   </select>
 </div>







 </form>
</div>


<!------------SOBRE ROSITA-------------------------->

<div style="float:right; margin-left:550px; margin-top: -700px">
  
  
</div>









</body>
</html>