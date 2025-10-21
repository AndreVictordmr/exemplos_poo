<?php
class Cliente{
    public string $name;
    public int $idade;
    public string $email;

    /*Método responsavel por exibir os dados de um objeto */
    //Usamos void para sinalizar que o método não tem return
    public function monstraDados():void{
        echo    "<div>
                    <h4> $this->name </h4>
                    <p><b>E-mail de contato:</b> $this->email </p>
                    <p><b>Idade:</b> $this->idade anos</p>
                </div>";
    }
}