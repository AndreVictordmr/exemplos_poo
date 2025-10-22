<?php 
class Livro{
    public string $titulo;
    public string $autor;
    public ?int $paginas;

    protected function verificarPaginas(string $titulo):void{
        if($this->paginas <=0 && $this->paginas != null){
            echo "<h1 style= 'color:red'>$titulo Quantidade inválida de páginas</h1>";
            exit;
        }
    }
    protected function verificarTitulo(string $titulo):void{
        if(mb_strlen($titulo)<3){
            echo "<h1 style= 'color:red'>Título não pode ter menos do que 3 letras</h1>";
            exit;
        }
    }
    public function __construct(string $titulo,string $autor, ?int $paginas=null) {
        $this->verificarTitulo($titulo);
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->verificarPaginas($titulo);
    }

}