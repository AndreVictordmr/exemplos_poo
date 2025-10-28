<?php
class Cliente{
    /*Atributos privados NÃO PODEM SER ACESSADOS/MODIFICADOS dora da própria classe em que estão declarados  */
    private string $name;
    private int $idade;
    private string $email;
    private ?string $telefone;

    public function __construct(string $name,string $email,int $idade,?string $fone=null){
        $this->setName($name);
        $this->setEmail($email);
        $this->setIdade($idade);
        $this->telefone = $fone;
    }

    public function getName():string{return $this->name;}
    private function setName(string $valor):void{
        if(empty($valor)){
            echo "<p style='color:red'>Nome não pode ser vazio</p>";
        }else{ $this->name=$valor;}
    }


    public function getIdade():int{return $this->idade;}
    private function setIdade(int $valor):void{
        if($valor<0){
            echo "<p style='color:red'>Idade invalida</p>";
        }else{ $this->idade=$valor;}
    }

    public function getEmail():string{return $this->email;}
    private function setEmail(string $valor):void{
        /*Usamos a filter_var() com a constate FILTER_VALIDATE_EMIL para o PHP verificar se o valor de email informado  é valido. se sim, retorna TRUE. senão, retorna FALSE */
        $validaEmail =  filter_var($valor,FILTER_VALIDATE_EMAIL);
        if(!$validaEmail){
            echo "<p style='color:red'>E-mail invalido</p>";
        }else{
            $this->email=$valor;
        }
    }

    public function getTelefone():?string{return $this->telefone;}
    
}