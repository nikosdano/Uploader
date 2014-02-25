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
			 <div class = "login">
        	                        <h2>Login</h2>
                	                        <p class = "pdiv"> Enter your username and password so as to enter your account. </p>
                        	                        <form action = "log.php" method = "post">
                                	                        <input type = "text" name = "username" value = "Username" />
                                        	                <input type = "password" name = "password" value = "Password" />
                                                	        <input type = "submit" value = "Login" />
                                                	</form>
			 </div>
		</body>
</html>

