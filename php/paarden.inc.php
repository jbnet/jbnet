<?php
define( 'DB_HOST', 'localhost' );
define( 'DB_NAME', 'paarden' );
define( 'DB_USER', 'root' );
define( 'DB_PASS', 'gbf1901' );

function verbinden(){
  $verbinding = 'mysql:host=' . DB_HOST . ';DB_NAME=' . DB_NAME;
  $db = null;

  try{
    return new PDO( $verbinding, DB_USER, DB_PASS );
  }catch( PDOException $e ){
    return NULL;
  }
}

function allePaarden( &$db ){
  if( is_null( $db ) ) return array();

  $sql = "
    SELECT
      paarden.paarden.*
    FROM
      paarden.paarden";

  $vraag = $db->prepare( $sql );
  $vraag->execute();
  return $vraag->fetchAll( PDO::FETCH_OBJ );
}

function allePaardenMetRas( &$db ){
  if( is_null( $db ) ) return array();

  $sql = "
    SELECT
      paarden.paarden.ID,
      paarden.paarden.naam,
      paarden.paarden.geboren,
      paarden.rassen.rasnaam
    FROM
      paarden.paarden
    LEFT JOIN
      paarden.rassen
    ON
      paarden.paarden.ras_ID = paarden.rassen.ID
      ";

  $vraag = $db->prepare( $sql );
  $vraag->execute();
  return $vraag->fetchAll( PDO::FETCH_OBJ );
}

function rasPaarden( &$db, $welkras ){
  if( is_null( $db ) ) return array();

  $sql = "
    SELECT
      paarden.paarden.ID,
      paarden.paarden.naam,
      paarden.paarden.geboren,
      paarden.rassen.rasnaam
    FROM
      paarden.paarden
    LEFT JOIN
      paarden.rassen
    ON
      paarden.paarden.ras_ID = paarden.rassen.ID
    WHERE
      paarden.paarden.ras_ID = :rasid
      ";

  $vraag = $db->prepare( $sql );
  $vraag->bindValue( ':rasid', $welkras, PDO::PARAM_INT );
  $vraag->execute();
  return $vraag->fetchAll( PDO::FETCH_OBJ );
}

function nieuwPaard( &$db, $naam, $ras ){
  if( is_null( $db ) ) return '';

  $sql = "
    INSERT
    INTO
      paarden.paarden
    ( paarden.paarden.naam, paarden.paarden.ras_ID )
    VALUES
      ( :naam, :rasid )
    ";
  $vraag = $db->prepare( $sql );
  $vraag->bindValue( ':naam', $naam, PDO::PARAM_STR );
  $vraag->bindValue( ':rasid', $ras, PDO::PARAM_INT );
  $vraag->execute();
  return $db->lastInsertId();
}

function bewerkPaard( &$db, $id, $naam, $rasid ){
  if( is_null( $db ) ) return '';

  $sql = "
    UPDATE
      paarden.paarden
    SET
      paarden.paarden.naam = :naam,
      paarden.paarden.ras_ID = :rasid
    WHERE
      paarden.paarden.ID = :id
    ";
  $vraag = $db->prepare( $sql );
  $vraag->bindValue( ':naam', $naam, PDO::PARAM_STR );
  $vraag->bindValue( ':rasid', $rasid, PDO::PARAM_INT );
  $vraag->bindValue( ':id', $id, PDO::PARAM_INT );
  $vraag->execute();
}

function verwijderPaard( &$db, $id ){
  if( is_null( $db ) ) return '';

  $sql = "
    DELETE FROM
      paarden.paarden
    WHERE
      paarden.paarden.ID = :id
    ";
  $vraag = $db->prepare( $sql );
  $vraag->bindValue( ':id', $id, PDO::PARAM_INT );
  $vraag->execute();
}

function alleRassen( &$db ){
  if( is_null( $db ) ) return array();

  $sql = "
    SELECT
      paarden.rassen.*
    FROM
      paarden.rassen
      ";
  $vraag = $db->prepare( $sql );
  $vraag->execute();
  return $vraag->fetchAll( PDO::FETCH_OBJ );
}
