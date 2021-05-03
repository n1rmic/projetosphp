<?php

include('../conexao/conexao.php');



$nome = $_POST['nome'];
$nome = $_POST['cep'];
$nome = $_POST['cpf'];
$nome = $_POST['cidade'];
$nome = $_POST['bairro'];
$nome = $_POST['estado'];
$nome = $_POST['nascimento'];


$QRY = "INSERT INTO cadcli" (nome) values ('$nome', '$cep','$cpf','$cidade','$bairro', '$estado','$nascimento');
$RESULT = MYSQLI_QUERY($CON,$QRY);

if($RESULT){

echo "Cadastrado com sucesso";


} else {
    echo "Não cadastrado";
}

