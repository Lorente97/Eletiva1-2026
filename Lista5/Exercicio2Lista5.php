<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> 
<div class="container py-3">
<form method="post">
<div class="mb-3">
<label class="form-label">Nome do primeiro aluno:</label>
<input type="text" name="nome[]" class="form-control" required>
</div>
<div class="mb-3">
<label class="form-label">Notas:</label>
<input type="number" name="n1[]" class="form-control mb-1" placeholder="Nota 1" required>
<input type="number" name="n2[]" class="form-control mb-1" placeholder="Nota 2" required>
<input type="number" name="n3[]" class="form-control" placeholder="Nota 3" required>
</div>
<div class="mb-3">
<label class="form-label">Nome do segundo aluno:</label>
<input type="text" name="nome[]" class="form-control" required>
</div>
<div class="mb-3">
<label class="form-label">Notas:</label>
<input type="number" name="n1[]" class="form-control mb-1" required>
<input type="number" name="n2[]" class="form-control mb-1" required>
<input type="number" name="n3[]" class="form-control" required>
</div>
<div class="mb-3">
<label class="form-label">Nome do terceiro aluno:</label>
<input type="text" name="nome[]" class="form-control" required>
</div>
<div class="mb-3">
<label class="form-label">Notas:</label>
<input type="number" name="n1[]" class="form-control mb-1" required>
<input type="number" name="n2[]" class="form-control mb-1" required>
<input type="number" name="n3[]" class="form-control" required>
</div>
<div class="mb-3">
<label class="form-label">Nome do quarto aluno:</label>
<input type="text" name="nome[]" class="form-control" required>
</div>
<div class="mb-3">
<label class="form-label">Notas:</label>
<input type="number" name="n1[]" class="form-control mb-1" required>
<input type="number" name="n2[]" class="form-control mb-1" required>
<input type="number" name="n3[]" class="form-control" required>
</div>
<div class="mb-3">
<label class="form-label">Nome do quinto aluno:</label>
<input type="text" name="nome[]" class="form-control" required>
</div>
<div class="mb-3">
<label class="form-label">Notas:</label>
<input type="number" name="n1[]" class="form-control mb-1" required>
<input type="number" name="n2[]" class="form-control mb-1" required>
<input type="number" name="n3[]" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $alunos = [];

    for($i=0;$i<5;$i++){
        $nome = $_POST['nome'][$i];
        $n1 = $_POST['n1'][$i];
        $n2 = $_POST['n2'][$i];
        $n3 = $_POST['n3'][$i];

        $media = ($n1 + $n2 + $n3) / 3;

        $alunos[$nome] = $media;
    }

    arsort($alunos);

    echo "Resultado:";

    foreach($alunos as $nome => $media){
        echo "<p>$nome - $media</p>";
    }
}
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>