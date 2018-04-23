<?php
$pizza = new stdClass;
$pizza->bodem     = 'volkoren';
$pizza->diameter  = 30;
$pizza->beleg     = array( 'tomaten', 'rode ui', 'kaas', 'gorgonzola' );
$pizza->naam      = 'Pizza Gorgonzola';

$pizzas['gorgonzola'] = $pizza;
$pizzas['tonno'] = new stdClass;
$pizzas['tonno']->bodem = 'wit';
$pizzas['tonno']->diameter = 30;
$pizzas['tonno']->beleg = array( 'tomaten', 'ui', 'kaas', 'tonijn' );
$pizzas['tonno']->naam = 'Pizza Tonno';

$pizzas['picolo'] = (object)array(
  'bodem'     => 'wit',
  'diameter'  => '20',
  'beleg'     => array( 'tomaten', 'kaas', 'oregano' ),
  'naam'      => 'Pizza Picolo'
);

echo '<h2>Alle pizza\'s</h2><ul>';
foreach( $pizzas as $naamcode => $pizza ):
  echo '<strong>'.$naamcode.'</strong><ul>';
  foreach( $pizza as $sleutel => $waarde ):
    if( is_object( $waarde ) || is_array( $waarde ) ):
      echo '<li>'.$sleutel.'<ul>';
      foreach( $waarde as $k => $v ):
        echo '<li>'.$v.'</li>';
      endforeach;
      echo '</ul></li>';
    elseif( is_array( $pizza ) ):
  	  echo '<li>'.$sleutel.' => '.$pizza[$sleutel].'</li>';
    elseif( is_object( $pizza ) ):
      echo '<li>'.$sleutel.' => '.$pizza->$sleutel.'</li>';
    endif;
  endforeach;
  echo '</ul>';
endforeach;
echo '</ul>';
?>
