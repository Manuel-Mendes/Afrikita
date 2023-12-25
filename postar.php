<?php

include ("dbprog.php");

$titulo=$_POST['lbtitulo'];
$conteudo=$_POST['conteudo'];
$caminho=$_POST['caminho'];

$objPost= new conn();

$objPost->postar($titulo,$conteudo,$caminho);

header("location: index.php");






?>