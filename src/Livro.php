<?php 
class Livro{
    public string $titulo;
    public string $autor;
    public int $paginas;

    public function __construct(string $titulo,string $autor,int $paginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
    }
}