<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulário</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h5><strong>Formulário 1</strong></h5>

  <form method="POST">
    <div class="row g-3">

      <div class="col-md-4">
        <input type="text" name="nome" class="form-control" placeholder="First name">
      </div>

      <div class="col-md-4">
        <input type="text" name="sobrenome" class="form-control" placeholder="Last name">
      </div>

      <div class="col-md-4">
        <div class="input-group">
          <span class="input-group-text">@</span>
          <input type="text" name="user" class="form-control" placeholder="Username">
        </div>
      </div>

      <div class="col-12">
        <button class="btn btn-primary" type="submit">Enviar</button>
      </div>

    </div>
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $user = $_POST["user"];

        echo "<div class='mt-3 alert alert-success'>";
        echo "Nome: $nome <br>";
        echo "Sobrenome: $sobrenome <br>";
        echo "Usuário: $user";
        echo "</div>";
    }
  ?>

</div>

</body>
</html>