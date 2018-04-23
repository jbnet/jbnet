<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Tutorialspoint.com</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
      
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            print_r($_POST);
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password1'])) {
				$conn = new mysqli('sql35.hostingdiscounter.nl', 'jbnet-nl', 'KxRQ_5CLz', 'jbnet-nl');
				$sql= ("select * from lvprofiel where lvprofiel.lidnr=". $_POST['username']);
				$result = $conn->query($sql);
				echo $result;
				echo "<BR>";
				if ($result->num_rows > 0){
				echo "ik kom tot hier";
				while($row = $result->fetch_assoc()) {
				$LID=$row['lidnr'];
				$PASS=$row['password'];
				echo $LID;
				}
				}
				
				  if ($_POST['username'] == $LID && 
				   $_POST['password1'] == $PASS) {
				   $_SESSION['valid'] = true;
				   $_SESSION['timeout'] = time();
				   $_SESSION['username'] = $LID;
                  
				   echo 'You have entered valid use name and password';

				}else {
                  $msg = 'Wrong username or password';
               
			   }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "Lidnummer" 
               required autofocus></br>
            <input type = "password1" class = "form-control"
               name = "password1" placeholder = "wachtwoord" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
      
   </body>
</html>