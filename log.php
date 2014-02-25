<?php
        session_start();
                if(isset($_SESSION['username']) ){
                        header("location: account.php");
                }
?>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
	</head>
		<body>
                      <?php
			$con = mysql_connect("mysql15.000webhost.com", "a4636766_dano", "3091997dogz");
			$db = "a4636766_seminar";
			$rv = mysql_select_db($db, $con);
			$username = $_POST['username'];
			$password = $_POST['password'];
                        $password = md5($password);
                        $username = stripslashes($username);
                        $password = stripslashes($password);
                        $username = mysql_real_escape_string($username);
                        $password = mysql_real_escape_string($password);
                        $query = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";
			$result = mysql_query($query);
			$rows = mysql_num_rows($result);
			if($rows == 1) {
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					header("Location: account.php");
			}
			else {
			?> 
                        <div class = "login">
				<h2> Error. Wrong username/password!</h2>
					<p> Please login again </p>
						<form action = "" method = "post" >
							<input type = "text" name =  "username" value = "Username" />
							<input type = "password" name = "password" value = "Password" />
							<input type = "submit" value = "Login" />
						</form>
			   </div>
		 	<?php
                        }
                         ?>
		</body>
</html>
