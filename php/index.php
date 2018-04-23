<?php
$lijst = array();
if( $handle = opendir('.') ):
    while( false !== ( $entry = readdir( $handle ) ) ):
        if( $entry != "." && $entry != ".." && substr( $entry, 0, 1 ) !== "." && !is_dir( $entry ) && substr( $entry, -8 ) !== '.inc.php' && substr( $entry, -9 ) !== '.html.php' && $entry !== 'index.php' ):
            $lijst[] = $entry;
        endif;
    endwhile;
    closedir($handle);
endif;
?><!DOCTYPE html>
<html>
<body>
  <ul>
  <?php foreach( $lijst as $regel ): ?>
      <li><a href="<?php echo $regel; ?>" ><?php echo $regel; ?></a></li>
  <?php endforeach; ?>
  </ul>
</body>
</html>
