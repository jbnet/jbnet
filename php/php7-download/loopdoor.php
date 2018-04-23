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

echo '<ul>'.loopdoor( 'Pizza\'s', $pizzas ),'</ul>';

function loopdoor( $naam, $ding ){
  $regels = '';
  if( is_array( $ding ) || is_object( $ding) ):
    $wat = ( is_array( $ding )? '[array]' : '[object]' );
    $regels .= '<strong>'.$naam.' '.$wat.'</strong><ul>';
    foreach( $ding as $k => $v ):
      $regels .= loopdoor( $k, $v );
    endforeach;
    $regels .= '</ul>';
  else:
    $regels .= '<li><strong>'.$naam.'</strong> => '.$ding.'</li>';
  endif;
  return $regels;
}
?>
