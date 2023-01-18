<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listagem de Produtos</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://kit.fontawesome.com/eb55db7828.js" crossorigin="anonymous"></script>
</head>
<body>

<?php


include 'conexao.php';
$sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = 'usuario' and status = 'Ativo'";
$buscar = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($buscar);


?>

<div class="container" style="margin-top: 40px;">
  <div style="text-align: right;">
    <a href="menu.php" role="button" class= "btn btn-sm btn-primary">Voltar</a>  
  </div>

  <h3>Lista de Produtos</h3>

  <br>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nro Produto</th>
        <th scope="col">Nome Produto</th>
        <th scope="col">Categoria</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Fornecedor</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>

    <tr>
    	<?php
    		include 'conexao.php';
    		$sql = "SELECT * FROM `estoque`";
    		$busca = mysqli_query($conexao,$sql);

    		while ($array = mysqli_fetch_array($busca)) {     			
  			$id_estoque = $array['id_estoque'];
  			$nroproduto = $array['nroproduto'];
  			$nomeproduto = $array['nomeproduto'];
  			$categoria = $array['categoria'];
  			$quantidade = $array['quantidade'];
  			$fornecedor = $array['fornecedor'];
    	?>

      <tr>
        <td><?php echo $nroproduto ?></td>

        <td><?php echo $nomeproduto ?></td>

        <td><?php echo $categoria ?></td>

        <td><?php echo $quantidade ?></td>

        <td><?php echo $fornecedor ?></td>
        <td>
               
            
          
          <a class="btn btn-info btn-sm" style="color:#fff; margin-right: 10px;"  href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
          
          
         
          <a class="btn btn-danger btn-sm" style="color:#fff"  href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a>
        <?php } ?>  

        </td>
         
      </tr>


      </tr>  	
      
    </tr>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>