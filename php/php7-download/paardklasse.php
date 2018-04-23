<?php
$paard = new Paardklasse( 'Elmo' );
echo $paard->vertel();

class Dierklasse {
  protected $soort;
  protected $naam;

  function __construct( $s, $n ){
    $this->soort = $s;
    $this->naam = $n;
  }

  public function vertel(){
    if( $this->soort != '' && $this->naam != '' ):
      return "Dit $this->soort heet $this->naam.";
    else:
      return false;
    endif;
  }
}

// deze moet altijd onder de parent-klasse
class Paardklasse extends Dierklasse{
  protected $soort = 'paard';

  function __construct( $n ){
    $this->naam = $n;
  }
}

?>
