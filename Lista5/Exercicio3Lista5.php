<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Produtos</title>
</head>
<body>

<form method="post">

<p>Produto 1</p>
<input type="text" name="codigo[]" placeholder="Código" required><br>
<input type="text" name="nome[]" placeholder="Nome" required><br>
<input type="text" name="preco[]" placeholder="Preço" required><br><br>

<p>Produto 2</p>
<input type="text" name="codigo[]" placeholder="Código" required><br>
<input type="text" name="nome[]" placeholder="Nome" required><br>
<input type="text" name="preco[]" placeholder="Preço" required><br><br>

<p>Produto 3</p>
<input type="text" name="codigo[]" placeholder="Código" required><br>
<input type="text" name="nome[]" placeholder="Nome" required><br>
<input type="text" name="preco[]" placeholder="Preço" required><br><br>

<p>Produto 4</p>
<input type="text" name="codigo[]" placeholder="Código" required><br>
<input type="text" name="nome[]" placeholder="Nome" required><br>
<input type="text" name="preco[]" placeholder="Preço" required><br><br>

<p>Produto 5</p>
<input type="text" name="codigo[]" placeholder="Código" required><br>
<input type="text" name="nome[]" placeholder="Nome" required><br>
<input type="text" name="preco[]" placeholder="Preço" required><br><br>

<button type="submit">Enviar</button>

</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

$produtos=array();

for($i=0;$i<5;$i++){

$codigo=$_POST['codigo'][$i];
$nome=$_POST['nome'][$i];
$preco=$_POST['preco'][$i];

if($preco>100){
$preco=$preco-($preco*0.10);
}

$produtos[$codigo]=array("nome"=>$nome,"preco"=>$preco);
}

uasort($produtos,function($a,$b){
return strcmp($a["nome"],$b["nome"]);
});

echo "<h3>Resultado:</h3>";

foreach($produtos as $codigo=>$dados){
echo $codigo." - ".$dados["nome"]." - ".$dados["preco"]."<br>";
}
}
?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>