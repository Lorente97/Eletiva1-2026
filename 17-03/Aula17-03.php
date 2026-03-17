<?php
    $mapa1 = array('João', 'Maria', 3);
    print_r($mapa1);
    echo "<p></p>";
    var_dump($mapa1);
    echo "<p>Valor da posição 2".$mapa1[2]."</p>";

    $mapa2[1] = "Vanessa";
    $mapa2[2] = "José";
    $mapa2[3] = "Clara";
    print_r($mapa2);

    $contatos["Vanessa"] = "123456";
    $contatos["José"] = "098765";
    echo"<p></p>";
    print_r($contatos);

    foreach($contatos as $valor){
        echo"<p>Telefone: $valor </p>";
    }

    foreach($contatos as $chave => $valor){
        echo"<p>Telefone de: $chave</p>";
    }
    //apagar posição
    unset($mapa1[2]);
    print_r($mapa1);

    //funções
    $quantidade = count($mapa2);
    echo"<p>Quantidade de Elementos do: $quantidade</p>";
    asort($contatos); //Ordenar pelo valor
    ksort($contatos); //Ordenar pela chave
?>