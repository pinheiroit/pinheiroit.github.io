<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style type="text/css">
    
    #botao {

        background-color: #FF1168;
        color: #ffff;   
    }
    </style>
    <title>Cadastrar Fornecedor</title>
</head>
<body>

<form action="_inserir_fornecedor.php" method="post" style="margin-top:40px">

<div class="container">

    <div class="form-group">
        <label>Fornecedor</label>
        <input type="text" class="form-control" name="fornecedor" placeholder="Insira o fornecedor">
    </div>
    <div style="text-align:right;">
  <button type="submit" id='botao' class="btn btn-sm">Cadastrar</button>
  <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
    
</form>

</div>

</form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>