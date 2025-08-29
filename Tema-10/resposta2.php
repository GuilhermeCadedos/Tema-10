<?php
 class Torcedor {
    public $nome;
    public $time;
    public $idade;
 
  public function __construct( $nome, $time, $idade ) {
     $this ->nome = $nome;
     $this ->time = $time;
     $this ->idade = $idade;
  }
  public function exibir(){
    echo"Torcedor: {$this->nome} {$this->time} ({$this->idade})<br>";
  }
}

$torcedor1 = new Torcedor("Arthur", "Botafogo", "14");
$torcedor2 = new Torcedor("Lucas", "Flamengo", "22");
$torcedor3 = new Torcedor("Kelyson", "Vasco", "37");

$torcedor1->exibir();
$torcedor2->exibir();
$torcedor3->exibir();









?>