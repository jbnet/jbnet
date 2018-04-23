<?php
$pizza = new PizzaKlasse( array(
  'naamcode'    => 'gorgonzola',
  'naam'        => 'Pizza Gorgonzola',
  'bodem'       => 'volkoren',
  'diameter'    => 30,
  'beleg'       => array( 'tomaten', 'rode ui', 'kaas', 'gorgonzola' ),
  'prijs'       => 9.95
) );

echo '<ul>';
foreach( $pizza as $k => $v ):
  echo '<li>'.$pizza->htmlSleutelWaarde( $k ).'</li>';
endforeach;
echo '</ul>';

echo $pizza->htmlItereer();

class PizzaKlasse {
  public $naamcode;
  public $naam;
  public $bodem;
  public $diameter;
  public $beleg;

  function __construct( $parameters ){
    foreach( $parameters as $k => $v ):
      if( !property_exists( $this, $k ) ) continue;
      $this->$k = $v;
    endforeach;
  }

  public function htmlBeleg(){
    $regels = '<ul>';
    foreach( $this->beleg as $k => $v ):
      $regels .= '<li>'.$v.'</li>';
    endforeach;
    $regels .= '</ul>';
    return $regels;
  }

  public function htmlSleutelWaarde( $sleutel ){
    if( $sleutel == 'beleg' ):
      return '<strong>'.$sleutel.'</strong> => '.$this->htmlBeleg();
    else:
      return '<strong>'.$sleutel.'</strong> => '.$this->$sleutel;
    endif;
  }

  public function htmlItereer(){
    $regels = '<ul>';
    foreach( $this as $k => $v ):
      $regels .= '<li>'.$this->htmlSleutelWaarde( $k ).'</li>';
    endforeach;
    $regels .= '</li>';
    return $regels;
  }
}
