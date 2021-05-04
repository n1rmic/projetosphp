<?php


include("conexao.php");

echo "<h1>Lista de Filmes em estoque</h1>";
echo "<a href='cadastrar.php'> Cadastrar Novo Filme</a> |
      <a href='aumentaestoque.php'>Aumentar Estoque</a>";  
echo "<hr>";


$sql = "select * from filmes";
$qry = mysqli_query($conn,$sql);

echo "<table border='1'>";
echo "<tr>";
echo "<td>id</td>";
echo "<td>Nome </td>";
echo "<td>Gênero</td>";
echo "<td>Ano De lançamento</td>";
echo "<td>Estoque</td>";

echo"</tr>";



while($linha = mysqli_fetch_array($qry)){

echo "<tr>";
echo "<td>".$linha['id']."</td>";
echo "<td>".$linha['nome']."</td>";
echo "<td>".$linha['genero']."</td>";
echo "<td>".$linha['anolancamento']."</td>";
echo "<td>".$linha['estoque']."</td>";




//coluna açoes


echo"<td><a href='editar.php?id={$linha['id']}'>Editar</a>
</td>";

echo"<td><a href='excluir.php?id={$linha['id']}'>Excluir</a>
</td>";





echo"</tr>";






echo $linha['id'];



}




//var_dump($qry)