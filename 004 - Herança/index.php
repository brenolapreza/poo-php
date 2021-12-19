<?php
/* Herança é um recurso que permite que classes compartilhem 
atributos e métodos a fim de reaproveitar códigos ou comportamento generalizados.  */

class Veiculo {
      // Atributos
      public $modelo;
      public $cor;
      public $ano;
  
      // Métodos
      public function Andar() {
          echo "andou!";
  
      }
  
      public function Parar() {
          echo "parou!";
  
      }
}

class Carro extends Veiculo {

    public function ligarLimpador() {
        echo "limpando!";
    }
  
}

class Moto extends Veiculo {

    public function darGrau() {
        echo "Dando Grau";
    }

}

$uno = new Carro();
$uno->modelo = "Quadrado";
$uno->cor = "Branco";
$uno->ano = 1988;
$uno->ligarLimpador();
$uno->Andar();
var_dump($uno);

$fazer = new Moto();
$fazer->modelo = "250";
$fazer->cor = "Azul";
$fazer->ano = 2008;
$fazer->darGrau();
$fazer->Parar();
var_dump($fazer)
?>