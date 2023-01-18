<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<?php






 include 'conexao.php';
$sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario= 'usuario' and status='Ativo'";
$buscar = mysqli_query($conexao,$sql);
$array= mysqli_fetch_array($buscar);

?>

<div class="container" style="margin-top: 100px;">
<div class="row">

	<div class="col-sm-6">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Adicionar Produto</h5>
	        <p class="card-text">Opção para adicionar produtos em estoque.</p>
	        <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
	      </div>
	    </div>
	  </div>

 
	
	  <div class="col-sm-6">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Lista de Produtos</h5>
	        <p class="card-text">Visualizar, editar e excluir os produtos.</p>
	        <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6" style="margin-top: 20px;">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Adicionar Categoria</h5>
	        <p class="card-text">Opção para adicionar Categoria de produtos.</p>
	        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
	      </div>
	    </div>
	  </div>
	  
	  <div class="col-sm-6" style="margin-top: 20px;">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Adicionar Fornecedor</h5>
	        <p class="card-text">Opção para adicionar Fornecedor.</p>
	        <a href="adicionar_fornecedor.php" class="btn btn-primary">Fabricante</a>
	      </div>
	    </div>
	  </div>

	  <div class="col-sm-6" style="margin-top: 20px;">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Aprovar Usuários</h5>
	        <p class="card-text">Aprovar usuários solicitantes.</p>
	        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
	      </div>
	    </div>
	  </div>

	<div class="col-sm-6" style="margin-top: 20px;">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Cadastrar Usuários</h5>
	        <p class="card-text">Opção para adicionar produtos em estoque.</p>
	        <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar Usuários</a>
	      </div>
	    </div>
	  </div>
	  <div style= "text-align:right; margin-top: 10px;">
			<a href="index.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
		</div>

	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>