<?php
require_once 'paarden.inc.php';

// SECTOR 4 – Controller
$db = verbinden();

// nieuw paard in DB
if( !is_null( $db ) && array_key_exists( 'nieuwe', $_POST ) ):
  $n = filter_var( trim( $_POST['naam'] ), FILTER_SANITIZE_STRING );
  $r = filter_var( $_POST['rasid'] , FILTER_SANITIZE_NUMBER_INT );
  $nieuwe_id = nieuwPaard( $db, $n, $r );
endif;

// edit paard in DB
if( !is_null( $db ) && array_key_exists( 'bewerk', $_POST ) ):
  $n = filter_var( trim( $_POST['naam'] ), FILTER_SANITIZE_STRING );
  $r = filter_var( $_POST['rasid'], FILTER_SANITIZE_NUMBER_INT );
  $id = filter_var( $_POST['ID'], FILTER_SANITIZE_NUMBER_INT );
  bewerkPaard( $db, $id, $n, $r );
endif;

// delete paard uit DB
if( !is_null( $db ) && array_key_exists( 'verwijder', $_POST ) ):
  $id = filter_var( $_POST['ID'], FILTER_SANITIZE_NUMBER_INT );
  verwijderPaard( $db, $id );
endif;

if( count( $_POST ) > 0 ):
  header( 'location: '.$_SERVER['HTTP_REFERER'] );
endif;

// SECTOR 1 – Model
// alle paarden verzamelen
$ap = allePaarden( $db );

// alle rassen verzamelen
$ar = alleRassen( $db );

// SECTOR 2 – View
require_once 'paarden.html.php';
