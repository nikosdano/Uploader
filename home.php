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
                                <?php if($_SESSION['username'] == "alitiz") { ?> <h2>Sorry!</h2> <p> Hello alitiz. It's your lucky day. We have a song for you. No, it's not alitiz' song: </p><a href = "http://www.youtube.com/watch?v=1TO48Cnl66w"> <p style = "color:blue">enjoy!</p></a><?php } else { ?>
				<h2> Welcome to the NDU! </h2>
					<p> NDU stands for Nigga's Dick Uploader and is the worst choice to upload & store your files. </p>
                                        <p> Browsing as: <?php echo '<p style = "color: red">' .  $_SESSION['username'] . '</p> '; ?> </p>
					<p> Wanna log out? </p><a href = "logout.php"><p style = "color: #0000FF"> Log me out.</p> </a>
                                        <p> Go to your: </p><a href = "account.php"> <p style = "color: #0000FF"> Upload Area. </p> </a>

			</div>
                       <?php } ?>
		</body>
</html>
