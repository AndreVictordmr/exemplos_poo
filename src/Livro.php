<?php 
class Livro{
    protected string $titulo;
    protected string $autor;
    protected ?int $paginas;

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

    public function setTitulo():string{
        return $this->titulo;
    }
    public function setAutor():string{
        return $this->autor;
    }

    public function setPaginas(){
        if($this->paginas === null){
            return "Não informado";
        }else{
        return $this->paginas;
        }
    }

}