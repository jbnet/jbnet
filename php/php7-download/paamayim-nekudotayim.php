<?php
$k = 'Paamayim';
echo $k::nekudotayim();

class Paamayim{
  public static $dubbelepunt = '&#58;';
  const HOEVAAK = 2;

  public function nekudotayim(){
    $uit = '';
    for( $i = 0; $i < self::HOEVAAK; $i++ )
      $uit .= self::$dubbelepunt;
    return $uit;
  }
}
?>
