<?php
session_start();
?>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
	</head>
		<?php
                        
			if(!isset($_SESSION['username'] ) ) {
				header("Location: login.php");
			}
		?>
		<div class = "login">
			<h2>Upload files as: <?php echo $_SESSION['username']; ?> </h2>
				<p> Here is your upload area. Upload your files and browse them whenever you want. </p>
                                	<div class ="upload">
						<form action="upload.php" method="post"
                                                enctype="multipart/form-data">
                                        		<label for = "file"> Your filename: </label>
								<input type = "file" name = "file" class = "file" id="file" /> <br>
								<input type = "submit" value = "Upload!" class = "upload2" />   
						</form>
		</div>

</html>	


