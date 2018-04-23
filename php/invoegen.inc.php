<?php
// beveiliging tegen toegang zonder include
if(!defined( '_INC_TOEGANG' ) ):
  header( 'location: https://www.politie.nl/themas/cybercrime.html' );
endif;

$getal++;
?>
