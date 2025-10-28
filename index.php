<?php 
//Importando a classe Cliente
    require_once "src/Cliente.php";

    $clienteA=new Cliente("Jonny","jonninho@gmail.com",20,"(24)9999-9999");
    $clienteB=new Cliente("Felix","bago@gmail.com",50,"(41)98152-8975");
    $clienteC=new Cliente("Jose","marceneiroJose@gmail.com",49);
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
        <div>
            <h2>Nome: <?= $clienteA->getName()?></h2>
            <p>Idade: <?= $clienteA->getIdade()?></p>
            <p>E-mail: <?= $clienteA->getEmail()?></p>
            <p>Telefone: <?=$clienteA->getTelefone()??"Não informado"?></p>
        </div>

    </body>
</html>