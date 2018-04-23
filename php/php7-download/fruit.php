<?php

$fruit = array(
  'appel'       => 'lekker',
  'peer'        => 'sappig',
  'sinaasappel' => 'zuur',
  'kiwi'        => 'super gezond',
  'banaan'      => 'zoet',
  'meloen'      => 'heerlijk',
  'kersen'      => 'zalig'
);

echo 'Fruit<ul>';
foreach( $fruit as $k => $v ):
  echo '<li>'.$k.' => '.$v.'</li>';
endforeach;
echo '</ul>';

$flip = array_flip( $fruit );
echo 'Flip<ul>';
foreach( $flip as $k => $v ):
  echo '<li>'.$k.' => '.$v.'</li>';
endforeach;
echo '</ul>';

$zoeksleutel = array_search( 'zuur', $fruit );
echo '<p>'.$zoeksleutel.' => '.$fruit[$zoeksleutel].'</p>';

$sleutel = 'aardbei';
if( array_key_exists( $sleutel, $fruit ) ):
  echo '<p>'.$sleutel.' => '.$fruit[$sleutel].'</p>';
else:
  echo '<p>'.$sleutel.' => zit niet in de fruitmand</p>';
endif;

$sleutels = array_keys( $fruit );
echo 'Sleutels<ul>';
foreach( $sleutels as $k => $v ):
  echo '<li>'.$k.' => '.$v.'</li>';
endforeach;
echo '</ul>';

$rand1 = array_rand( $fruit );
echo '<p>'.$rand1.' => '.$fruit[$rand1].'</p>';

$rand_keys = array_rand( $fruit, 4 );
echo 'Random Array<ul>';
foreach( $rand_keys as $sleutel ):
  echo '<li>'.$sleutel.' => '.$fruit[$sleutel].'</li>';
endforeach;
echo '</ul>';


$array_reverse = array_reverse( $fruit, true );
echo 'Reverse<ul>';
foreach( $array_reverse as $k => $v ):
  echo '<li>'.$k.' => '.$v.'</li>';
endforeach;
echo '</ul>';

$asortarray = $fruit;
asort( $asortarray );
echo 'A Sort<ul>';
foreach( $asortarray as $k => $v ):
  echo '<li>'.$k.' => '.$v.'</li>';
endforeach;
echo '</ul>';

$krsortarray = $fruit;
krsort( $krsortarray );
echo 'KR Sort<ul>';
foreach( $krsortarray as $k => $v ):
  echo '<li>'.$k.' => '.$v.'</li>';
endforeach;
echo '</ul>';

$shufflefruit = $fruit;
shuffle( $shufflefruit );
echo 'Shuffle<ul>';
foreach( $shufflefruit as $k => $v ):
  echo '<li>'.$k.' => '.$v.'</li>';
endforeach;
echo '</ul>';

$sleutels = array_keys( $fruit );
shuffle( $sleutels );
$gemengd = array();
foreach( $sleutels as $sleutel ):
  $gemengd[$sleutel] = $fruit[$sleutel];
endforeach;

echo 'Sleutel shuffle<ul>';
foreach( $gemengd as $k => $v ):
  echo '<li>'.$k.' => '.$v.'</li>';
endforeach;
echo '</ul>';

$waarden = array_values( $fruit );
shuffle( $waarden );
$gemengd = array();
foreach( $waarden as $waarde ):
  $sleutel = array_search( $waarde, $fruit );
  $gemengd[$sleutel] = $fruit[$sleutel];
endforeach;

echo 'Waarde shuffle<ul>';
foreach( $gemengd as $k => $v ):
  echo '<li>'.$k.' => '.$v.'</li>';
endforeach;
echo '</ul>';

$gemengd = array();
while( count( $gemengd ) < count( $fruit ) ):
  $sleutel = array_rand( $fruit );
  if( !array_key_exists( $sleutel, $gemengd ) ):
    $gemengd[$sleutel] = $fruit[$sleutel];
  endif;
endwhile;

echo 'Betere Waarde shuffle<ul>';
foreach( $gemengd as $k => $v ):
  echo '<li>'.$k.' => '.$v.'</li>';
endforeach;
echo '</ul>';
?>
