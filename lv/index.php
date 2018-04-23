<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Big Business 2.0
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120624
-->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>PV Het Luchtvermaak</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="bigbusiness2/bigbusiness2/style.css" />
<script type="text/javascript" src="bigbusiness2/bigbusiness2/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="bigbusiness2/bigbusiness2/jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="bigbusiness2/bigbusiness2/jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
	});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48511794-1', 'hetluchtvermaak.nl');
  ga('send', 'pageview');

</script>
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
<div id="wrapper">
	<div id="header"> 	
		<div id="logo">
			<h1><a href="../index.html">Het Luchtvermaak</a></h1>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li class="first"><a href="index.html">Home</a></li>
			<li><a href="HTML%20pagina/agenda.html">Agenda</a></li>
			<li> <span class="opener">Uitslagen<b></b></span>
				<ul>
					<li><a href="HTML%20pagina/uitslagen2015.html">2015</a></li>
					<li><a href="HTML%20pagina/uitslagen2014.html">2014</a></li>
					<li><a href="HTML%20pagina/uitslagen2013.html">2013</a></li>
					<li><a href="HTML%20pagina/uitslagen2012.html">2012</a></li>
					<li><a href="HTML%20pagina/uitslagen2011.html">2011</a></li>
					<li><a href="HTML%20pagina/uitslagen2010.html">2010</a></li>
					<li><a href="HTML%20pagina/uitslagen2009.html">2009</a></li>
					<li><a href="HTML%20pagina/uitslagen2008.html">2008</a></li>
					<li><a href="HTML%20pagina/uitslagen2007.html">2007</a></li>
					<li><a href="HTML%20pagina/uitslagen2006.html">2006</a></li>
					
				</ul>
			</li>
			<li> <span class="opener">Kampioenschappen<b></b></span>
				<ul>
					<li><a href="HTML%20pagina/kampioenschappen2015.html">2015</a></li>
					<li><a href="HTML%20pagina/kampioenschappen2014.html">2014</a></li>
					<li><a href="HTML%20pagina/kampioenschappen2013.html">2013</a></li>
					<li><a href="HTML%20pagina/kampioenschappen2012.html">2012</a></li>
					<li><a href="HTML%20pagina/kampioenschappen2011.html">2011</a></li>
					<li><a href="HTML%20pagina/kampioenschappen2010.html">2010</a></li>
					<li><a href="HTML%20pagina/kampioenschappen2009.html">2009</a></li>
					<li><a href="HTML%20pagina/kampioenschappen2008.html">2008</a></li>
					<li><a href="HTML%20pagina/kampioenschappen2007.html">2007</a></li>
					<li><a href="HTML%20pagina/kampioenschappen2006.html">2006</a></li>
				</ul>
			</li>
			<li><a href="HTML%20pagina/foto.html">Foto's</a></li>
			<li> <span class="opener">Overig<b></b></span>
				<ul>
					<li><a href="HTML%20pagina/sponsoren.html">Sponsoren</a></li>
					<li><a href="HTML%20pagina/downloads.html">Downloads</a></li>
				</ul>
			</li>
			<li class="last"><a href="HTML%20pagina/contact.html">Contact</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	<div id="page">
		<img alt="Losplaats" src="foto1.jpg" width="900" height="242" class="style3" /><div id="content">
			<br />
			<div class="box">
				<h2><br />
				Welkom op de registratiepagina.</h2>
				
<a href="duif.php"><img src="duif.jpg" alt="Duif klokken"></a><BR>
<BR>
Hieronder ziet u het dag overzicht.<BR>
<B>Vandaag:</B>				
<?php

echo date('d-m-Y');
    
    $conn = new mysqli('sql35.hostingdiscounter.nl', 'jbnet-nl', 'KxRQ_5CLz', 'jbnet-nl');
    $sql= ("select * from lvduif,lvprofiel where lvduif.lidnr=lvprofiel.lidnr and datum=date(now()) order by vluchtnr,tijd asc");
   
    $result = $conn->query($sql); 

if ($result->num_rows > 0) {
 // output data of each row from $result 

$vlucht='1';
$tel=0;

echo '<table>';

while($row = $result->fetch_assoc()) {

if ($vlucht<>$row['vluchtnr']) { 
echo '</table><BR><table border=1><tr><td>Nr</td><td>Vluchtnr</td><td>Lidnr</td><td>Naam</td><td>Tijd</td></tr>';
$tel=1;} 
else { 
   $tel=$tel+1;
}


echo '<tr><td>'. $tel;
echo '</td><td>'. $row['vluchtnr']; 
echo '</td><td>'. $row['lidnr'];
echo '</td><td>'. $row['naam']; 
echo '</td><td>'. $row['tijd'];
echo '</td></tr>';

$vlucht=$row['vluchtnr'];

 } 
} else { 
echo '<BR><BR>Er zijn nog geen duiven geregistreerd.'; 
}

echo '</table>';

?>

			</div>
		</div>
		<br />
		<div id="sidebar" style="width: 212px; height: 650px">
			<div class="box">
				<h3><br />
				Vluchtschema</h3>
<ul class="list">
				
				<?php

    
    $conn = new mysqli('sql35.hostingdiscounter.nl', 'jbnet-nl', 'KxRQ_5CLz', 'jbnet-nl');
    $sql= ("SELECT * FROM lvvlucht WHERE datum>=Date(now()) ORDER BY datum");
   
    $result = $conn->query($sql); 

if ($result->num_rows > 0) {
 // output data of each row from $result 
while($row = $result->fetch_assoc()) {
echo '<li>'. $row['datum'];
echo '&nbsp'. $row['vluchtnr']; 
echo '&nbsp'. $row['station'];
echo '</li>'; 

 } 
} else { 
echo 'Geen vluchtschema.'; 
}

?>
				</ul>
			</div>
			<div class="box">
			</div>
		</div>
		<br class="clearfix" />
	</div>
	<div id="page-bottom">
		<div id="page-bottom-content" style="width: 879px">
			<h3>&nbsp;</h3>
			<p>
				&nbsp;</p>
		</div>
		<br class="clearfix" />
	</div>
</div>
<div id="footer" class="style2">
	Copyrights (c) 2014 hetluchtvermaak.nl All right reserverd. Design by 
	FreeCSSTemplates.org. Photos by Fotogrph and Luchtvermaak</div>

</body>
</html>