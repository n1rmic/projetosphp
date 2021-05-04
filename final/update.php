<?php
include('conexao.php');
$id      =  $_GET['id'];
$nome    =  $_GET['nome'];
$genero   =  $_GET['genero'];
$anolacamento   =  $_GET['anolancamento'];
$estoque   =  $_GET['estoque'];
/*
UPDATE table_name
SET colmn1=value, column2=value2,...
WHERE some_column=some_value
*/

$sql = "UPDATE filmes set nome='$nome', genero='$genero', anolancamento='$anolancamento', estoque='$estoque'  where id='$id'";

$qry = mysqli_query($conn,$sql);

if($qry){
    header("Location:listar.php");
}else{
    echo "Deu Ruim... <a href='listar.php'>Voltar</a>";
}