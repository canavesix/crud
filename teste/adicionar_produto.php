<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }
    </style>
</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px">
    <h4>Formulário de Cadastro</h4>
    <form action="_inserir_produto.php" method="post" style="margin-top: 20px">    
        <div class="form-group">
            <label>Nro Produto</label>
            <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label>Nome Produto</label>
            <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label>Categoria</label>
            <select class="form-control" name="categoria">

                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                $buscar = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($buscar)) {
                  echo  $id_categoria = $array['id_categoria'];
                  echo  $nome_categoria = $array['nome_categoria']; 

                    
                ?>
              <option><?php echo $nome_categoria ?></option>
              <?php } ?>
            </select>

            <div class="form-group">
                <label >Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira quantidade do produto" required>
            </div>    
        </div>

        <div class="form-group">
            <label>Fornecedor</label>
            <select class="form-control" name="fornecedor">
         <?php
            include 'conexa.php';

            $sql2 = "SELECT * FROM fornecedor";
            $buscar2 = mysqli_query($conexao, $sql2);     

            while ($array2 = mysqli_fetch_array($buscar2)) {

                $id_fornecedor = $array2['id_forn'];
                $nome_fornecedor = $array2['nome_forn'];
            ?>    
            
                <option><?php echo $nome_fornecedor ?></option>
              <?php } ?>    
            </select>
        </div>

        <div style="text-align: right;"> 
            <button type="submit" id="botao" class="btn btn-primary" style="color: #fff;margin-right: 12px">Cadastrar</button>
            <a href="menu.php" role="button" class= "btn btn-light">Voltar</a>         
        </div>     
     </form>
</div>    

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>