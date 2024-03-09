<html>
<body>
<?php
  class equipa {
    public $nome;
    public $perdidos;
    public $ganhos;

    public function __construct($nome,$ganhos,$perdidos){
      $this->nome = $nome;
      $this->ganhos = $ganhos;
      $this->perdidos - $perdidos;
    }

    public function lerNome(){
      return $this->nome;
    }

    public function lerGanhos(){
      return $this->ganhos;
    }

    public function lerPerdidos(){
      return $this->perdidos;
    }

    public function qualidade(){
      return (($this->ganhos * 100)/($this->ganhos + $this->perdidos));
    }

    public function somarVitoria(){
      $this->ganhos++;
    }

    public function somarDerrota(){
      $this->perdidos++;
    }
  }
    $obj = new equipa('Lisboa', 5,5);
    $obj2 = new equipa('Porto', 2,7);

    $obj->somarVitoria();
    $obj->somarVitoria();

    $obj2->somarVitoria();
    $obj->somarDerrota();

    echo $obj->lerNome().' com ' .$obj->lerGanhos().' jogos ganhos e '.$obj->lerPedidos(). ' perdidos,
    tem uma qualidade média de '.$obj->qualidade().'<br/>';

    echo $obj2->lerNome().' com ' .$obj->lerGanhos().' jogos ganhos e '.$obj->lerPedidos(). ' perdidos,
    tem uma qualidade média de '.$obj->qualidade().'<br/>';
?>
</body>
</html>