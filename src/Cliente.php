<?php
class Cliente{
    public string $name;
    public int $idade;
    public string $email;
    
    // Telefone é opcional, ou seja, caso não seja informado ficará valendo null
    public ?string $telefone;// ? - indica que este atributo pode ser nulo

    /*Método construtor: responsável por 'construir' um objeto COM seus dados no momento da criação */
    public function __construct(string $name,string $email,int $idade,?string $fone=null){
        /*Atribuindo os valores recebidos através dos parâmetros do contrutor,aos atributos da classe*/
        $this->name=$name;
        $this->email=$email;
        $this->idade=$idade;
        $this->telefone=$fone;
    }
}