<?php
         session_start();
                if(isset($_SESSION['username']) ){
                         header ("location: home.php");
                }
?>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
	</head>
		<body>
			<div class = "login">
				<h2> Welcome to the NDU! </h2>
					<p> NDU stands for Nigga's Dick Uploader and is the worst choice to upload & store your files. </p>
					<p> Go me to the: </p><a href = "login.php"><p style = "color: #0000FF"> Members Area.</p> </a>
					<p> NOT a member? Go me to the: </p><a href = "register.php"><p style = "color: #0000FF">Registration Area.</p> </a>
			</div>
		</body>
</html>
