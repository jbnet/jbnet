<?php 
include 'class.paardklasse.php';
include 'class.visklasse.php';

$paard = new Paardklasse ('Elmo','Gras');
$vis = new Visklasse ('Blub','vlokken');

echo $paard->vertel();
echo '<BR>';
echo $vis->vertel();

?>

			