<?php
include('../include/cabecalho.php');
include('../conexao/conexao.php');
include('../include/menu.php');
?>


  <!-- 2 column grid layout with text inputs for the first and last names -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">




<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Criar Conta</h4>
	
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>

	<p class="divider-text">
        <span class="bg-light">OU</span>
    </p>



	<form method="POST" action="../tabelas/tbllogin.php">

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>

        <input name="nome" class="form-control" placeholder="Nome" type="text">
    </div> <!-- form-group// -->

    <!--EMAIL-->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email" type="email">
    </div>
      <!--EMAIL-->
    
    
     <!-- SENHA -->
    <div class="form-group input-group">
   
 
<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="senha" class="form-control" placeholder="Senha" type="password">
    </div> 
  
   <!-- SENHA -->
    	
	 <!-- SITUACAO -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="situacoes_id"class="form-control" value="1" readonly type="password">
    </div> 
     <!-- SITUACAO -->

<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="niveis_acesso_id"class="form-control" value="3" readonly type="password">
    </div> 



    <div class="form-group input-group">
    
        <button type="submit" class="btn btn-primary btn-block">Criar Conta  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Tem uma conta? <a href="login.php">Logar</a> </p>                                                                 
</form>
</article>
