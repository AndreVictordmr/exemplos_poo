<?php 
//Importando a classe Cliente
    require_once "src/Cliente.php";
//Criando objetos (oi instâncias) à partir da Classe 
    $clienteA= new Cliente();
    $clienteB= new Cliente();
//Atribuindo valores ao objeto $clienteA
    $clienteA->name="Andre";
    $clienteA->idade=30;
    $clienteA->email="kururusaiaga@gmail.com";
//Atribundo valores ao objero $clienteB
    $clienteB->name="Mario";
    $clienteB->idade=15;
    $clienteB->email="mushurum@gmail.com";

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
        
        <h3>Acessando/Lendo os dados dos Objetos</h3>
        <h4>Cliente A</h4>
        <ul>
            <li>Nome: <?=$clienteA->name?></li>
            <li>Idade: <?=$clienteA->idade?> anos</li>
            <li>Email: <?=$clienteA->email?></li>
        </ul>
        <hr>
        <section>
            <h4>Cliente B</h4>
            <p><b>Nome:</b> <?=$clienteB->name?></p>
            <p><b>Idade:</b> <?=$clienteB->idade?> anos</p>
            <p><b>Email:</b> <?=$clienteB->email?></p>
        </section>
        <hr>

        <pre><?=var_dump($clienteA,$clienteB);?></pre>
    </body>
</html>