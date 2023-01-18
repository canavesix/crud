<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>


<div class="container" style="margin-top: 40px;width: 500px;">
	<div style="text-align:right;">
		<a href="menu.php" role="button" class= "btn btn-light">Voltar</a>
	</div>

	<h4>Cadastro Categoria</h4>
	<form action="_inserir_categoria.php" method="post">
		<label style="margin-bottom: 10px;">Categoria</label>
		<div class="form-group">
			<input type="text" name="categoria" class="form-control" placeholder="Digite o nome da Categoria" autocomplete="off">
		</div>
		<div style="text-align: right;">
		<br>
		<button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
	</div>
	</form>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>