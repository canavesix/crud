<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
	<title>Tela de Login</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
	crossorigin="anonymous">
	<style type="text/css">
		#tamanho {
			width: 350px;
			box-shadow: 7px 2px 60px -8px rgba(0,0,0,0.38);
			-webkit-box-shadow: 7px 2px 60px -8px rgba(0,0,0,0.38);
			-moz-box-shadow: 7px 2px 60px -8px rgba(0,0,0,0.38);
			}
	</style>
</head>
<body>

<div class="container" id="tamanho" style="margin-top: 100px; padding: 15px;border-radius: 15px; border: 2px solid #f3f3f3" >

	<center>
		<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
	  	<path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" style="fill: #02AEEF;"/>
		</svg>
	</center>

	<form action="menu.php" method="post">
		<div class="form-group" style="margin-top: 15px;">
			<label>Usuário</label>
			<input type="text" name="usuario" class="form-control" placeholder="Login" autocomplete="off" required>
		</div>
		<div class="form-group" style="margin-top: 15px;">
			<label>Senha</label>
			<input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
		</div>		
	

	<div style="text-align: right;">	
		<button type="submit" class="btn btn-sm btn-success" style="margin-top:15px;">Entrar</button>
	</div>
	</form>
</div>	

<div style = "margin-top: 10px";>
<center>
	<small> Não possui cadastro? Clique <a href="cadastro_usuario_externo.php"> aqui </a></small>
</center>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>