<?php
    include_once("../conexao/conexao.php");
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);
	$senha = md5($senha);
	$select_situacao = mysqli_real_escape_string($conn, $_POST['select_situacao']);
	$select_nivel_acesso = mysqli_real_escape_string($conn, $_POST['select_nivel_acesso']);
    
    

	$result_usuario = "INSERT INTO usuarios (nome,email,senha,situacoes_id,niveis_acesso_id, created) 
    
    VALUES ('$nome','$email','$senha','$select_situacao','$select_nivel_acesso',NOW())";
    
  
    
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if ($resultado_usuario){
        header("Location: ../index.php");
    }

    
?>