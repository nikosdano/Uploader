<?php
        session_start();
                if(isset($_SESSION['username']) ){
                        header("location: account.php");
                }
?>
<html>
	<body>
		<head>
			<link rel = "stylesheet" type = "text/css" href = "style.css">
		</head>
<?php 
        $con = mysql_connect("mysql15.000webhost.com", "a4636766_dano", "3091997dogz");
	$db = "a4636766_seminar";
	$rv = mysql_select_db($db, $con);
	$username = $_POST['username'];
	$password = $_POST['password'];	
        $epass = md5($password);
	$query = "SELECT username FROM users WHERE username = '" . $username . "'";
	$result = mysql_query($query);
	if(!$result) {
		echo mysql_error() ;
	}
	if(mysql_num_rows($result) > 0) {
		?>
 			<div class = "login">
				<h2> Username exists </h2>
					<p> Your username is already in use. Please, select another one and repeat the registration proccess.</p>
											<form action = "" method = "post">
							<input type = "text" name = "username" value = "Username" /> 
							<input type = "password" name = "password" value = "Password"  />
							<input type = "submit" name = "submit" value = "Submit"/>
						</form>   
             <?php          
               
        }
        
                 
	else {
		$q = "INSERT INTO users(username, password) VALUES('" . $username . "' , '" . $epass . "')";
		$r = mysql_query($q);
		if (!$r){
			echo mysql_error() . "hey";
			die();
		}
		?>
			<div class = "login">
				<h2>Login</h2>
					<p class = "pdiv"> User created successfully! </p>
						<form action = "log.php" method = "post">
							<input type = "text" name = "username" value = "Username" />
							<input type = "password" name = "password" value = "Password" />
							<input type = "submit" value = "Login" />
						</form>	
			</div>
		<?php
		
           }
        

	?>
</html>


