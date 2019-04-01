<!-- Header -->
<?php
		$titulo = "Mercado Exchange";
		include 'common/head.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- Header -->
<?php
	include 'common/header.php';
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Formulário de Cadastro</h1>
    <p class="lead">Por favor preencha o forumulário de cadastro para fazer parte do <strong>Mercado Exchange</strong> - o maior marketplace de troca de produtos usados.</p>
  </div>
</div>

<div class="container">
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">A sua informação nunca será compartilhada com ninguem.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputSenha">Senha</label>
      <input type="password" class="form-control" id="exampleInputSenha" placeholder="Senha">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleTermosECondicoes">
      <label class="form-check-label" for="exampleTermosECondicoes"><a href="#">Termos e condições.</a></label>
    </div>
    <button type="submit" class="btn btn-primary">Cadastre-se</button>
  </form>
</div>
    
</body>
</html>


<!-- Footer -->
<?php
	include 'common/footer.php';
?>