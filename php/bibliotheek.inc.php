<?php

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
