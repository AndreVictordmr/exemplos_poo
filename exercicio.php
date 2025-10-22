<?php 
    require_once "src/Livro.php";

    $livro1 = new Livro("One piece Vol.110","Eiichiro Oda",200);
    $livro2 = new Livro("Jujutsu Kaisen:Batalha de Fenticeiro Vol.1","Gege Akutami",192);
    $livro3 = new Livro("Berserker - Edição de Luxo Vol.14","Kentaro Miura",240);
    $livre4 = new Livro("tex","teste");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Livraria</title>
    </head>
    <body>
        <h1>Bem Vindo a Grande Livraria </h1>
        <hr>
        <h2>Livros</h2>
        <div>
            <h3>Mangas</h3>
            <ul id="principal">
                <li><?=$livro1->titulo;?>
                    <ul class="segundario">
                        <li><b>Autor: </b> <?=$livro1->autor?></li>
                        <li><b>Paginas:</b> <?=$livro1->paginas?></li>
                    </ul>
                </li>
                <li><?=$livro2->titulo;?>
                    <ul class="segundario">
                        <li><b>Autor: </b> <?=$livro2->autor?></li>
                        <li><b>Paginas:</b> <?=$livro2->paginas?></li>
                    </ul>
                </li>
                <li><?=$livro3->titulo;?>
                    <ul class="segundario">
                        <li><b>Autor: </b> <?=$livro3->autor?></li>
                        <li><b>Paginas:</b> <?=$livro3->paginas?></li>
                    </ul>
                </li>
            </ul>
        </div>
    </body>
</html>