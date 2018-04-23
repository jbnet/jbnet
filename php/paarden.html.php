<!DOCTYPE html>
<html>
<head>
<style>
	form{
		border: 1px solid orange;
		border-radius: 5px;
		padding: 5px;
		margin: 5px;
	}
	.nieuwe{
		background: orange;
	}
	.rood{
		color: red;
	}
</style>
</head>
<body>

<form action="" method="post" class="nieuwe" >
	<h3>Nieuw paard</h3>
	<input type="text" name="naam" placeholder="Naam" value="" /><br>
	<select name="rasid" >
		<?php foreach( $ar as $ras ): ?>
		<option value="<?php echo $ras->ID; ?>" ><?php echo $ras->rasnaam; ?></option>
		<?php endforeach; ?>
	</select><br>
	<input type="submit" name="nieuwe" value="Nieuw paard" />
</form>

<?php foreach( $ap as $paard ): ?>
<form action="" method="post">
	<input type="hidden" name="ID" value="<?php echo $paard->ID; ?>" />
	<input type="text" name="naam" placeholder="Naam" value="<?php echo $paard->naam; ?>" /><br>
	<select name="rasid" >
		<?php foreach( $ar as $ras ): ?>
		<option value="<?php echo $ras->ID; ?>" <?php echo( $ras->ID == $paard->ras_ID ? ' selected ' : '' ); ?> ><?php echo $ras->rasnaam; ?></option>
		<?php endforeach; ?>
	</select><br>
	<input type="submit" name="bewerk" value="Bewerk paard" />
	<input type="submit" name="verwijder" value="Verwijder paard" class="rood" />
</form>
<?php endforeach; ?>

</body>
</html>
