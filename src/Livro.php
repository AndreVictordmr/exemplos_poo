<?php 
class Livro{
    protected string $titulo;
    protected string $autor;
    protected ?int $paginas;

    protected function verificarTitulo(string $titulo):void{
        if(mb_strlen($titulo)<3 || empty($titulo)){
            echo "<p style= 'color:red'>Título não pode ser vazio ter menos do que 3 letras </p>";
        }
    }
    public function __construct(string $titulo,string $autor, ?int $paginas=null) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setPaginas($paginas);
    }

    public function getTitulo():string{return $this->titulo;}
    private function setTitulo(string $valor):void{
        $this->verificarTitulo($valor);
        $this->titulo = $valor;
    }

    public function getAutor():string{return $this->autor;}
    private function setAutor(string $valor):void{
        if(empty($valor)){
            echo "<p style= 'color:red'>Autor não informado</p>";
        }
        $this->autor = $valor;
    }
    public function getPaginas():?int{return $this->paginas;}
    private function setPaginas(?int $valor){
        if($valor <=0 && $valor != null){
            echo "<p style= 'color:red'>Quantidade inválida de páginas</p>";
        }      
        $this->paginas = $valor;
        
    }

}