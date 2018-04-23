<html>
<body>
  <form action="" method="get" >
    <input type="number" name="getal" value="<?php echo ( array_key_exists( 'getal', $_GET ) ? $_GET['getal'] : '' ); ?>" />
    <input type="submit" name="rekenen" value=" ! = " />
    <input readonly type="text" name="faculteit" value="<?php echo ( array_key_exists( 'getal', $_GET ) ? faculteit( $_GET['getal'] ) : '' ); ?>" />
  </form>
</body>
</html>
<?php

function faculteit( $getal ){
  if( $getal < 0 ):
    return 'nil';
  elseif( $getal <= 1 ):
    return 1;
  else:
    return $getal * faculteit( $getal-1 );
  endif;
}
?>
