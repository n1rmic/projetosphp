<?php
include('conexao.php');
$id = $_GET['id'];

//echo $idteste;


$sql = "select * from filmes where id='$id'";
$qry = mysqli_query($conn,$sql);

$linha = mysqli_fetch_array($qry);

$id      =   $linha['id'];
$nome    =   $linha['nome'];
$genero   =   $linha['genero'];
$anolancamento   =   $linha['anolancamento'];
$estoque   =   $linha['estoque'];


?>

<form action="update.php" method="get">
id    <input type="text"               name="id"            value="<?php echo $id ?>">
Nome  <input type="text"               name="nome"          value="<?php echo $nome ?>">
Gênero <input type="text"              name="genero"        value="<?php echo $genero ?>">
Ano de Lançamento<input type="text"    name="anolancamento"  value="<?php echo $anolancamento ?>">
Estoque <input type="text"             name="estoque"       value="<?php echo $estoque ?>">
<input type="submit" value ="Atualizar">
</form>