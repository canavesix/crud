<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listagem de Usuários</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://kit.fontawesome.com/eb55db7828.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container" style="margin-top: 40px;">
  <div style="text-align: right;">
    <a href="menu.php" role="button" class= "btn btn-sm btn-primary">Voltar</a>  
  </div>

  <h3>Lista de Aprovação de Usuários</h3>

  <br>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nome Usuário</th>
        <th scope="col">E-mail usuário</th>
        <th scope="col">Nível usuário</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>

    <tr>
    	<?php
    		include 'conexao.php';
    		$sql = "SELECT * FROM usuarios WHERE status = 'Inativo'";
    		$busca = mysqli_query($conexao,$sql);

    		while ($array = mysqli_fetch_array($busca)) {     			
  			$id_usuario = $array['id_usuario'];
  			$nomeusuario = $array['nome_usuario'];
        $mail = $array['mail_usuario'];
        $nivel = $array['nivel_usuario'];
  			
    	?>

      <tr>
        <td><?php echo $nomeusuario ?></td>
        <td><?php echo $mail ?></td>
        <td><?php echo $nivel ?></td>

        <td>
          <a class="btn btn-success btn-sm" style="color:#fff; margin-right: 10px;"  href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1" role="button"><i class="fa-solid fa-user-plus"></i></i>&nbsp;Administrador</a>
          <a class="btn btn-warning btn-sm" style="color:#fff; margin-right: 10px;"  href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2" role="button"><i class="fa-solid fa-user-plus"></i></i>&nbsp;Funcionario</a>
          <a class="btn btn-dark btn-sm" style="color:#fff; margin-right: 10px;"  href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3" role="button"><i class="fa-solid fa-user-plus"></i></i>&nbsp;Conferente</a>
          
          <a class="btn btn-danger btn-sm" style="color:#fff"  href="_deletar_usuario.php?id=<?php echo $id_usuario ?>&nivel=" role="button"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a>
        </td>
      </tr>  	
      <?php } ?>
    </tr>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>