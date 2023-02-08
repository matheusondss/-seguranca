<!DOCTYPE html>
<html lang="en">
<head>
  <title>Criptografia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cadastro de fornecedor</h2>
  <form action="cadfornecedor.php" method="POST">
  <div class="form-group">
      <label for="razaosocial">razaosocial:</label>
      <input type="razaosocial" class="form-control" id="razaosocial" placeholder="razaosocial" name="razaosocial">
    </divrazaosocial
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="email" name="email">
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="senha" class="form-control" id="senha" placeholder="senha" name="senha">
    </div>
 
    <button type="submit" class="btn btn-default">Cadastrar</button>
  </form>
</div>

</body>
</html>
