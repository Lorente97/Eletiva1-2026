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
<label for="nome" class="form-label">Insira o nome do livro:</label>
<input type="text" id="nome" name="nome[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="quantidade" class="form-label">Insira a quantidade em estoque:</label>
<input type="text" id="quantidade" name="quantidade[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="nome" class="form-label">Insira o nome do livro:</label>
<input type="text" id="nome" name="nome[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="quantidade" class="form-label">Insira a quantidade em estoque:</label>
<input type="text" id="quantidade" name="quantidade[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="nome" class="form-label">Insira o nome do livro::</label>
<input type="text" id="nome" name="nome[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="quantidade" class="form-label">Insira a quantidade em estoque:</label>
<input type="text" id="quantidade" name="quantidade[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="nome" class="form-label">Insira o nome do livro:</label>
<input type="text" id="nome" name="nome[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="quantidade" class="form-label">Insira a quantidade em estoque:</label>
<input type="text" id="quantidade" name="quantidade[]" class="form-control" required="">
</div>
<div class="mb-3">
<div class="mb-3">
<label for="nome" class="form-label">Insira o nome do livro:</label>
<input type="text" id="nome" name="nome[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="quantidade" class="form-label">Insira a quantidade em estoque:</label>
<input type="text" id="quantidade" name="quantidade[]" class="form-control" required="">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

    $livros = array();

    for($i=0;$i<5;$i++){
        $nome = $_POST['nome'][$i];
        $quantidade = $_POST['quantidade'][$i];

        $livros[$nome] = $quantidade;
    }

    ksort($livros);

    foreach($livros as $nome => $quantidade){
        echo $titulo . " - " . $quantidade;

        if($nome < 5){
            echo " (Estoque baixo)";
        }

        echo "<br>";
    }
}
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>