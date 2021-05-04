<?php
include('conexao.php');
$id =  $_GET['id'];

$sql = "DELETE from filmes  where id='$id'";

$qry = mysqli_query($conn,$sql);

if($qry){
    header("Location:listar.php");
}else{
    echo "Deu Ruim... <a href='listar.php'>Voltar</a>";
}