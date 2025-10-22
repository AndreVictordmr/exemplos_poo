# exemplos_poo
Aprendendo com exemplo a usar POO(Programaçao Orientada a Objetos)

```php
<!-- Aqui, usamos uma condicional if/else para mostrar paragrafos diferentes de acordo com a condição-->
<?php if($livro1->paginas):?>
    <li><b>Paginas:</b> <?=$livro1->paginas?></li>
<? else: ?>
    <li><b style="color:red">Não informado</b></li>
<?php endif?>

```

```php
/*  Tem paginas ? mostra as paginas
    Não tem? Mostra o "não informado"(Como se fosse um if)
    
    ?? - operador de coalecência
    */
<li><b>Paginas:</b> <?=$livro2->paginas ?? "Não informado"?></li>

```