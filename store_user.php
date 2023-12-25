<?php

include('dbprog.php');

$usuario=new conn();
 
 $pNome=$_POST['cPNome'];
 $sNome=$_POST['cSNome'];
 $oNome=$_POST['cONome'];
 $genero=$_POST['cGen'];
 $dataDeNascimento=$_POST['cDate'];
 $email=$_POST['eMail'];
 $senha=$_POST['ePassword'];
 $senha_confirma=$_POST['ePassword2'];
 $tel=$_POST['cContato'];
 $tipo_de_conta=$_POST['tConta'];
 $pais=$_POST['paises'];
   

   if($senha==$senha_confirma){

   	$usuario->registrar($pNome,$sNome,$oNome, $email,$senha,$dataDeNascimento,$genero,$tel,$tipo_de_conta,$pais);

   	header("location:login.php");

   }
   else{

   	header("location:cadastrar-se.php?erro=1");


   }

  


  ?>






















?>