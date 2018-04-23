<?php
$_vakjes = 36;
// SECTION 2: receive and crunch data
if( isset( $_POST['verzenden'] ) ):
  // formulier is ingevuld
  $naam = filter_var( trim( $_POST['naam'] ), FILTER_SANITIZE_STRING );
  $email = filter_var( trim( $_POST['email'] ), FILTER_SANITIZE_EMAIL );
  $fiche = filter_var( trim( $_POST['fiche'] ), FILTER_SANITIZE_STRING );

  if( $naam == '' || $email == '' || $fiche == '' ):
    $startderoulette = false;
  else:
    $startderoulette = true;
  endif;

else:
  // argeloze bezoeker
  $startderoulette = false;
endif;
// END SECTION 2: receive and crunch data

// SECTION 3: collect data voor output
if( $startderoulette ):
  // balletje op de roulette
  $balletje = mt_rand( 0, $_vakjes );

  // kleur bepalen
  if( $balletje > 0 ):
    if( $balletje % 2 == 0 ):
      $kleur = 'groen';
    else:
      $kleur = 'rood';
    endif;
  else:
    $kleur = 'wit';
  endif;

  // bekijken hoeveel speler gewonnen heeft
  if( is_numeric( $fiche ) ):
    // nummer gekozen
    if( $balletje === intval( $fiche ) ):
      $factor = $_vakjes;
    else:
      $factor = 0;
    endif;
  else:
    // kleur gekozen en goed gekozen
    if( $kleur === $fiche ):
      $factor = 2;
    else:
      $factor = 0;
    endif;
  endif;
endif;
// END SECTION 3: collect data voor output




?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>HTML5-roulette</title>
  <meta name="description" content="HTML5-roulette">
  <meta name="author" content="jeex.eu">

  <style>
    html{
      background: silver;
    }
    body{
      width: 400px;
      min-height: 200px;
      margin: 20px auto;
      background: white;
      border-radius: 5px;
    }
    form, div{
      padding: 10px;
    }
    p{
      margin: 5px 0px;
    }
  </style>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
<?php
// SECTION 4: view results
if( $startderoulette ):
  // print_r( $_POST );
  echo '<div>';
  echo '<p>Ingezet op '.$fiche.'</p>';
  echo '<p>Gevallen is '.$balletje.' op '.$kleur.'</p>';
  echo '<p>Gewonnen: '.$factor.'</p>';
  echo '</div>';
endif;
// END SECTION 4: view results

// SECTION 1: show form
?>
  <form action="" method="post">
    <p><input type="text" name="naam" value="<?php echo ( isset( $naam ) ? $naam : '' ); ?>" placeholder="Naam" required /></p>
    <p><input type="email" name="email" value="<?php echo ( isset( $email ) ? $email : '' ); ?>" placeholder="Emailadres" required /></p>
    <p>
      <select name="fiche" required >
        <?php $sel = ' selected="selected" '; ?>
        <?php if( !isset( $fiche ) ) $fiche = ''; ?>
        <option value=""></option>
        <?php
        for( $i = 0; $i <= $_vakjes; $i++ ):
          echo '<option value="'.$i.'" '.( $fiche == $i ? $sel : '' ).' >'.$i.'</option>';
        endfor;
        ?>
        <option value="rood" <?php echo ( $fiche === 'rood'? $sel : '' ); ?> >ROOD</option>
        <option value="groen" <?php echo ( $fiche === 'groen'? $sel : '' ); ?> >GROEN</option>
      </select>
    </p>
    <p><input type="submit" name="verzenden" value="Verzenden" /></p>
  </form>
<?php
// END SECTION 4: show form
?>

</body>
</html>
