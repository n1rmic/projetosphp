<?php
include('../include/cabecalho.php');
include('../conexao/conexao.php');
include('../include/menu.php');
?>

<form method="Post" action="">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="nome" class="form-control" />
        <label class="form-label" for="form6Example1">Nome</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="number" name="cep" class="form-control" />
        <label class="form-label" for="form6Example2">CEP</label>
      </div>
    </div>
 



  <!-- CPF -->
  <div class="form-outline mb-4">
    <input type="number" name="cpf" class="form-control" />
    <label class="form-label" for="form6Example4">CPF</label>
  </div>



<div class="form-outline">
        <input type="text" name="cidade" class="form-control" />
        <label class="form-label" for="form6Example1">Cidade</label>
      </div>
      <div class="form-outline">
        <input type="text" name="numero" class="form-control" />
        <label class="form-label" for="form6Example1">Numero da casa</label>
      </div>

<div class="form-outline">
        <input type="text" name="estado" class="form-control" />
        <label class="form-label" for="form6Example1">Estado</label>
      </div>
      <div class="form-outline">
        <input type="text" name="bairro" class="form-control" />
        <label class="form-label" for="form6Example1">Bairro</label>
      </div>
      
      <div class="form-outline">
        <input type="text" name="nascimento" class="form-control" />
        <label class="form-label" for="form6Example1">Nascimento</label>
      </div>




<div class="form-group">
			<label class="col-sm-2 control-label">Situação</label>
			<div class="col-sm-10">
				<select class="form-control" name="select_situacao">
					<option>Selecione</option>
					<?php
					$result_situacao = "SELECT * FROM situacoes";
					$result_situacao = mysqli_query($conn, $result_situacao);
					while($row_situacoes = mysqli_fetch_assoc($result_situacao)){ ?> 
						<option value="<?php echo $row_situacoes['id']; ?>"><?php echo $row_situacoes['nome']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>	
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Nivel de Acesso</label>
			<div class="col-sm-10">
				<select class="form-control" name="select_nivel_acesso">
					<option>Selecione</option>
					<?php
					$result_niveis_acessos = "SELECT * FROM niveis_acessos";
					$result_niveis_acessos = mysqli_query($conn, $result_niveis_acessos);
					while($row_niveis_acessos = mysqli_fetch_assoc($result_niveis_acessos)){ ?> 
						<option value="<?php echo $row_niveis_acessos['id']; ?>"><?php echo $row_niveis_acessos['nome']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		


 

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input
      class="form-check-input me-2"
      type="checkbox"
      value=""
      id="form6Example8"
      checked
    />
    <label class="form-check-label" for="form6Example8"> Li e declaro os termos e condições </label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Cadastrar</button>
</form>