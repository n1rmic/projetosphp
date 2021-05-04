<?php
include('conexao.php');

$sqllistar = "select * from filmes";
$qry1 = mysqli_query($conn, $sqllistar);

while($linha   = mysqli_fetch_array($qry1)){
      $id = $linha['id'];
      $estoque   = $linha['estoque'];
   

      $estoquenovo = $estoque +1;   



   $sql = "UPDATE filmes set estoque='$estoquenovo' where id='$id'";
   $qry =mysqli_query($conn,$sql);
   header("Location: listar.php");

    
}

