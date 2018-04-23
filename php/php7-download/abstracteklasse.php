<?php
$boes = new Hondklasse( 'Boes' );
$blub = new GOudvisklasse( 'Blub' );
echo $blub->vertel();

abstract class Dierklasse {
  protected $soort;
  protected $naam;

  public function vertel(){
    if( $this->soort != '' && $this->naam != '' ):
      return "<p>Deze $this->soort heet $this->naam".$this->extra().'</p>';
    else:
      return false;
    endif;
  }

  protected function extra(){
    return '.';
  }
}

class Hondklasse extends Dierklasse{

  function __construct( $n ){
    $this->soort = 'hond';
    $this->naam = $n;
    echo $this->vertel();
  }

  protected function extra(){
    return ' en het moet viermaal daags worden uitgelaten.';
  }
}

class Goudvisklasse extends Dierklasse{

  function __construct( $n ){
    $this->soort = 'goudvis';
    $this->naam = $n;
  }

  protected function extra(){
    return '. De kom moet elke dag vers water krijgen.';
  }
}
?>
