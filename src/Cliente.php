<?php
class Cliente{
    /*Atributos privados NÃO PODEM SER ACESSADOS/MODIFICADOS dora da própria classe em que estão declarados  */
    private string $name;
    private int $idade;
    private string $email;
    private ?string $telefone;

    public function __construct(string $name,string $email,int $idade,?string $fone=null){
        $this->name=$name;
        $this->email=$email;
        $this->idade=$idade;
        $this->telefone=$fone;
    }

    public function getName():string{return $this->name;}
    public function setName(string $name):void{$this->name=$name;}


    public function getIdade():int{return $this->idade;}
    public function setIdade(int $idade):void{$this->idade=$idade;}

    public function getEmail():string{return $this->email;}
    public function setEmail(string $email):void{$this->email=$email;}

    public function getTelefone():string{return $this->telefone;}
    public function setTelefone(string $telefone):void{$this->telefone=$telefone;}
}