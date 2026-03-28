<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1></h1>
<form method="post">
<div class="mb-3">
              <label for="numeros" class="form-label">Escreva os 7 números</label>
              <input type="text" id="numeros" name="numeros" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numeros = [
        $_POST["numero1"],
        $_POST["numero2"],
        $_POST["numero3"],
        $_POST["numero4"],
        $_POST["numero5"],
        $_POST["numero6"],
        $_POST["numero7"]
    ];

    $menor = $numeros[0];
    $posicao = 1;

    for ($i = 1; $i < 7; $i++) {
        if ($numeros[$i] < $menor) {
            $menor = $numeros[$i];
            $posicao = $i + 1;
        }
    }

    echo "Menor valor: $menor <br>";
    echo "Posição: $posicao";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>