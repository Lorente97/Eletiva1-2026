<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> 
<div class="container py-3">
<h1>Exercício 9</h1>

<form method="post">
<div class="mb-3">
    <label class="form-label">Digite a frase:</label>
    <textarea name="frase" class="form-control" required></textarea>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frase = $_POST["frase"];

    echo "<pre>Original: " . htmlspecialchars($frase, ENT_QUOTES, 'UTF-8') . "</pre>";
    echo "Sem espaços no início e fim: " . trim($frase) . "<br>";
    echo "Sem nenhum espaço: " . str_replace(" ", "", $frase);
}
?>
</div>
</body>
</html>