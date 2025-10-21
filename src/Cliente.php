<?php
class Cliente{
    public string $name;
    public int $idade;
    public string $email;

    /*Método responsavel por exibir os dados de um objeto */
    public function monstraDados(){
        echo    '<div>
                    <h4> NOME DO CLIENTE </h4>
                    <p><b>E-mail de contato:</b> EMAIL DO CLIENTE</p>
                    <p><b>Idade:</b> IDADE DO CLIENTE anos</p>
                </div>';
    }
}