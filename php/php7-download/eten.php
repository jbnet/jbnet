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
$groente = array(
  'spruiten'    => 'zalig',
  'kool'        => 'gezond',
  'bieten'      => 'lekker',
  'ui'          => 'zalig',
  'broccoli'    => 'gezond'
);
$eten = array(
  'fruit'       => $fruit,
  'groente'     => $groente,
  'drinken'     => array(
    'thee'        => 'zalig',
    'koffie'      => 'lekker',
    'sap'         => 'gezond'
  )
);

$hoe_ar = array();
foreach( $eten as $s => $soort ):
  if( !is_array( $soort ) ) continue;
  foreach( $soort as $naam => $hoe ):
    $hoe_ar[$hoe][$s] = $naam;
  endforeach;
endforeach;

foreach( $hoe_ar as $hoe => $soort ):
	if( !is_array( $soort ) ) continue;
	echo $hoe.'<ul>';
	foreach( $soort as $s => $naam ):
		echo '<li>'.$s.' => '.$naam.'</li>';
	endforeach;
	echo '</ul>';
endforeach;
?>
