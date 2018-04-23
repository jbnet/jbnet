<!doctype html>
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
    form{
      padding: 20px;
    }
    form p{
      margin: 5px 0px;
    }
  </style>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <form action="" method="post">
    <p><input type="text" name="naam" value="" placeholder="Naam" required /></p>
    <p><input type="email" name="email" value="" placeholder="Emailadres" required /></p>
    <p>
      <select name="fiche" required >
        <option value=""></option>
        <!-- TODO hier moeten de nummer 0..36 in de lijst komen -->
        <option value="rood">ROOD</option>
        <option value="groen">GROEN</option>
      </select>
    </p>
    <p><input type="submit" name="verzenden" value="Verzenden" /></p>
  </form>
</body>
</html>
