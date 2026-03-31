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
<label for="codigo" class="form-label">Insira o código:</label>
<input type="text" id="codigo" name="codigo[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="nome" class="form-label">Insira o nome do produto:</label>
<input type="text" id="nome" name="nome[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="preco" class="form-label">Insira preço:</label>
<input type="text" id="preco" name="preco[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="codigo" class="form-label">Insira o código:</label>
<input type="text" id="codigo" name="codigo[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="nome" class="form-label">Insira o nome do produto:</label>
<input type="text" id="nome" name="nome[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="preco" class="form-label">Insira o preço:</label>
<input type="text" id="preco" name="preco[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="codigo" class="form-label">Insira o código:</label>
<input type="text" id="codigo" name="codigo[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="nome" class="form-label">Insira o nome do produto::</label>
<input type="text" id="nome" name="nome[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="preco" class="form-label">Insira o preço:</label>
<input type="text" id="preco" name="preco[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="codigo" class="form-label">Insira o código:</label>
<input type="text" id="codigo" name="codigo[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="nome" class="form-label">Insira o nome do produto:</label>
<input type="text" id="nome" name="nome[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="preco" class="form-label">Insira o preço:</label>
<input type="text" id="preco" name="preco[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="codigo" class="form-label">Insira o codigo</label>
<input type="text" id="codigo" name="codigo[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="nome" class="form-label">Insira o nome do produto:</label>
<input type="text" id="nome" name="nome[]" class="form-control" required="">
</div>
<div class="mb-3">
<label for="preco" class="form-label">Insira o preço:</label>
<input type="text" id="preco" name="preco[]" class="form-control" required="">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>


<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $produtos = array();

    for($i=0;$i<5;$i++){
        $codigo = $_POST['codigo'][$i];
        $nome = $_POST['nome'][$i];
        $preco = $_POST['preco'][$i];

        if($preco > 100){
            $preco = $preco - ($preco * 0.10);
        }

        $produtos[$codigo] = array(
            "nome" => $nome,
            "preco" => $preco
        );
    }

    for($i=0;$i<4;$i++){
        for($j=$i+1;$j<5;$j++){
            if($produtos[array_keys($produtos)[$i]]["nome"] > $produtos[array_keys($produtos)[$j]]["nome"]){
                
                $keys = array_keys($produtos);

                $temp = $produtos[$keys[$i]];
                $produtos[$keys[$i]] = $produtos[$keys[$j]];
                $produtos[$keys[$j]] = $temp;
            }
        }
    }

    foreach($produtos as $codigo => $dados){
        echo $codigo . " - " . $dados["nome"] . " - " . $dados["preco"] . "<br>";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>