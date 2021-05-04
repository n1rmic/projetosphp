<?php

include('conexao.php');

$nome  = $_POST['nome'];
$genero = $_POST['genero'];
$anolancamento = $_POST['anolancamento'];
$estoque = $_POST['estoque'];



$sql = "insert into filmes (nome,genero,anolancamento,estoque) values ('$nome','$genero','$anolancamento','$estoque')";

$qry = mysqli_query($conn,$sql);
if($qry){
    header ("Location: listar.php");
}