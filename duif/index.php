<!DOCTYPE html>
<link rel="stylesheet" href="styles.css">
<html>
<head>
<title>Duiven klokken</title>
</head>

<body>
<?php
ob_start();
session_start();
date_default_timezone_set ("Europe/Amsterdam");
//require_once 'functions\functions.php';

// DATABASE VERBINDEN
$conn = new mysqli('sql35.hostingdiscounter.nl', 'jbnet-nl', 'KxRQ_5CLz', 'jbnet-nl');

if ($_SESSION['user'] == ''):
		$link_address = 'login.php';
		echo '<div class=vlucht><b>U bent niet aangemeld</b>';
		ECHO '<br> Meldt u hier aan met uw naam en wachtwoord.';
		echo '<br> klik <a href="'.$link_address.'">hier</a> om u aan te melden.</div>';
	else:
		echo '<div class=vlucht>Welkom '.$_SESSION(['user']).'</div>';
	endif;
?>

<div class="header">

<h1>Klok hier uw duif</H1>
<h2>Alleen voor leden van Het Luchtvermaak Rijssen</h2>
</div>
<BR>
<div class="menu">

</div>
<div class="vlucht">
	
</div>
<div class="content">
<BR>
Hieronder ziet u het dag overzicht.<BR>
<B>Vandaag:</B>				
<?php
	echo date('d-m-Y');
	echo '<BR><BR>Er zijn nog geen duiven geregistreerd.'; 

?>
</div>
<div class="right">

         
      </div>
         

</body>
</html>
