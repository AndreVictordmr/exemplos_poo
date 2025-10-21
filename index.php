<?php 
//Importando a classe Cliente
    require_once "src/Cliente.php";

    $clienteA=new Cliente("Jonny","jonninho@gmail.com",20);
    $clienteB=new Cliente("Felix","bago@gmail.com",50);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemplos</title>
    </head>
    <body>
        <h1>Exemplos de PHP com POO</h1>
        <hr>
        <h2>Trabalhando com classes e objetos</h2>
        

        <?=var_dump($clienteA)?>
    </body>
</html>