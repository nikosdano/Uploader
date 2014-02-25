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
			<div class = "login">
				<h2>Register</h2>
					<p> Enter a Username and Password so as to create an account!</p>
						<form action = "test.php" method = "post">
							<input type = "text" name = "username" value = "Username" />
							<input type = "password" name = "password" value = "Password" />
							<input type = "submit" value = "Submit" />
						</form>
			</div>		
	</body>
</html>
