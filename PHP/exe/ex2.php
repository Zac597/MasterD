<html>
<body>
<?php

  class equipa {
    public $nome;
    public $pontos;
    public $vitoria;
    public $empatar;
    public $derrota;

    public function __contruct($nome){
      $this->nome = $nome;
      $this->pontos = 0;
    }

    public function lerNome(){
      return $this->nome;
    }

    public function inserirNome($nome){
      $this->nome = $nome;
    }

    public function lerPontos(){
      return $this-> pontos; 
    }

    public function inserirPont($res){
      switch($res){
        case 'ganho':
          $this->pontos += $this->vitoria;
          break;

        case 'empatado':
          $this->pontos += $this->empatar;
          break;

        case 'perdido':
          $this->pontos += $this->derrota;
          break;
      }
    }
    public function __clone(){
      $this->vitoria = 4;
      $this->empatar = 1;
      $this->derrota = 0;
      $this->pontos = 0;

    }
  }

  $obj = new equipa('Lisboa');
  $obj2 = clone  $obj;
  $obj2->inserirNome('Lisboa B');

  $obj->inserirPont('ganho');
  $obj2->inserirPont('ganho');

  echo $obj->lerNome().' tem '.$obj->lerPontos().' pontos.<br/>';
  echo $obj2->lerNome().' tem '.$obj2->lerPontos().' pontos.<br/>'; 

?>
</body>
</html>