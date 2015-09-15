<?php
	
	// LOGIN.PHP
	
	// errori muutujad peavad igal juhul olemas olema 
	$email_error = "";
	$password_error = "";
	
	// kontrollime et keegi vajutas input nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "keegi vajutas nuppu";
		
		//kontrollin et e-post ei ole t�hi
		if ( empty($_POST["email"]) ) {
			$email_error = "See v�li on kohustuslik";
		}
		
		//kontrollin, et parool ei ole t�hi
		if ( empty($_POST["password"]) ) {
			$password_error = "See v�li on kohustuslik";
		} else {
			
			// kui oleme siia j�udnud, siis parool ei ole t�hi
			// kontrollin, et oleks v�hemalt 8 s�mbolit pikk
			if(strlen($_POST["password"]) < 8) { 
			
				$password_error = "Peab olema v�hemalt 8 t�hem�rki pikk!";
				
			}
			
		}
		
	}
	
?>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	
	<h2>Log in</h2>
		
		<form action="login.php" method="post" >
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
			<input type="submit" value="Log in">
		</form>
	
	<h2>Create user</h2>
	
</body>
</html>