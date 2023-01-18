<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

<div class="container" style="width:400px; margin-top: 40px;">
	<div style="text-align:right;">
		<a href="menu.php" role="button" class="btn btn-primary"> Voltar </a>
	</div>	
	<h4>Cadastrar Usuário</h4>
	<form action="_insert_usuario.php" method="post">
		<div class="form-group">
			<label>Nome do Usuário</label>
			<input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome de Usuário">
		</div>
		<div class="form-group">
			<label>E-mail</label>
			<input type="text" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Seu e-mail ou matrícula">
		</div>

		<div class="form-group">
			<label>Senha</label>
			<input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
		</div>

		<div class="form-group">
			<label>Confirmar Senha</label>
			<input type="password" name="senha2" class="form-control" required autocomplete="off" placeholder="Confirmar Senha" oninput="validaSenha(this)">
			<small>As senhas devem ser iguais</small>
		</div>
	<div class="form-group">
		<label>Nível de Acesso</label>
		<select name="nivelusuario" class="form-control">

				<option value="1">Administrador</option>
				<option value="2">Funcionário</option>
				<option value="3">Conferente</option>
				
			
		</select>
	</div>	
	<div style="text-align: right">
	<br>
	<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>	
	</div>

	</form>
	

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

	<script>
	function validaSenha (input){ 
		if (input.value != document.getElementById('txtSenha').value) {
	    input.setCustomValidity('Repita a senha corretamente');
	  } else {
	    input.setCustomValidity('');
	  }
	} 
	</script>

</body>
</html>	
