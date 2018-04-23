<?php

$c = new CookieBeheer( true, array(
  'naam'      => 'klassekoekje',
  'waarde'    => time(),
  'expirate'  => time() + 3600
) );
$c->setKoekje();

include 'bibliotheek.inc.php';
echo '<ul>'.loopdoor( 'cookie', $_COOKIE ).'</ul>';

class CookieBeheer{
  var $naam;
  var $waarde = '';
  var $expiratie = 0;
  var $pad = '';
  var $domein = '';
  var $sync;

  function __construct( $s, $atts = array() ){
    $this->sync = $s;
    foreach( $atts as $k => $v ):
      if( !property_exists( $this, $k ) ) continue;
      $this->$k = $v;
    endforeach;
  }

  function getKoekje(){
    if( array_key_exists( $this->naam, $_COOKIE ) ):
      return $_COOKIE[$this->naam];
    else:
      return '';
    endif;
  }

  function setKoekje(){
    if( $this->sync ) $_COOKIE[$this->naam] = $this->waarde;
    setcookie( $this->naam, $this->waarde, $this->expiratie, $this->pad, $this->domein );
  }

  function deleteKoekje(){
    if( $this->sync ) unset( $_COOKIE[$this->naam] );
    setcookie( $this->naam, '', -1, $this->pad, $this->domein );
  }

  function setWaarde( $w ){
    $this->waarde = $w;
    $this->setKoekje();
  }

  function htmlKoekje(){
    $regels = '<ul>';
    foreach( $this as $k => $v ):
      $regels .= '<li>'.$k.' => '.$v.'</li>';
    endforeach;
    $regels .= '</ul>';
    return $regels;
  }

}
?>
