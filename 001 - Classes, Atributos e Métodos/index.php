<?php

class Pessoa {
    // Atributos
    public $nome;
    public $idade;

    // Métodos
    public function Falar() {
        echo $this->nome." de ".$this->idade. " anos acabou de falar";
    }

}

// Instanciar a classe pessoa

$breno = new Pessoa();
$breno->nome = 'Breno Vainisckas Chaves Lapreza';
$breno->idade = 22;
$breno->Falar();

?>