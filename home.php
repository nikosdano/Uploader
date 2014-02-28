<?php
session_start();
if (!isset($_SESSION['username'])) {
          header ("Location: index.php");
}
?>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
	</head>
		<body>
			<div class = "login">
				<?php
					<h2> Welcome to the NDU! </h2>
						<p> NDU stands for Nigga's Dick Uploader and is the worst choice to upload & store your files. </p>
                                        	<p> Browsing as: <?php echo '<p style = "color: red">' .  $_SESSION['username'] . '</p> '; ?> </p>
						<p> Wanna log out? </p><a href = "logout.php"><p style = "color: #0000FF"> Log me out.</p> </a>
                                        	<p> Go to your: </p><a href = "account.php"> <p style = "color: #0000FF"> Upload Area. </p> </a>
	
			</div>
                       		<?php } 
 				?>
		</body>
</html>
