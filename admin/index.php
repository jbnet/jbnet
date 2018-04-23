<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>BA Automatisering - Login</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<style type="text/css">
.style2 {
				font-size: xx-small;
}
.style3 {
				border-style: solid;
				border-width: 1px;
}
.style4 {
				color: #0F8C8C;
				text-decoration: underline;
}
</style>
</head>
<body>

				<h2><br>
				Meldt u aan met uw gebruikersnaam en wachtwoord.</h2>
				
<?php

session_start();

if(isset($_POST['submit'])) 
{ 
    $user = $_POST['user'];
    $pass = $_POST['pass'];
	$profile = $_POST['profile']; 
    
    $conn = new mysqli('sql35.hostingdiscounter.nl', 'jbnet-nl', 'KxRQ_5CLz', 'jbnet-nl');
    $sql = "SELECT * FROM lvprofiel WHERE lidnr='$user'";

    /* check connection */
	if ($conn->connect_errno) {
	printf("Connect failed: %s\n", $conn->connect_error);
	exit();
	}

	$result = $conn->query($sql); 

if ($result->num_rows > 0) {
 // output data of each row from $result 
while($row = $result->fetch_assoc()) {

	if($pass==$row['password']){
	$cookie= new stdClass;
	$cookie->expire = time() + (60*60); // nu + 60 minuten
	$cookie->naam = "LVLID";
	$cookie->lidnr = $row['lidnr'];
	$cookie->profile = $row['profiel'];
	setcookie( $cookie->naam, $cookie->lidnr, $cookie->profile, $cookie->expire);
	header("Location: main.php");
	} else {
		echo 'Ongeldig wachtwoord';
	}

 } 
} else { 
echo 'Geen gebruiker gevonden.'; 
}
$conn->close();
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   Lidnr: <input type="text" name="user"><br>
   wachtwoord: <input type="password" name="pass"><br>
   
   <input type="submit" name="submit" value="Aanmelden"><br>
</form>
<BR>
		
</body>
</html>