<?php
session_start();
include("dbprog.php");
$email=$_POST['email'];
$senha=$_POST['senha'];


$validation= new conn();



$retorno=$validation->validarDados($email,$senha);
  
  $_SESSION['p_nome']=$retorno['p_nome'];
  $_SESSION['s_nome']=$retorno['s_nome'];
  $_SESSION['activo']='true';

header("location:index.php");
 





?>