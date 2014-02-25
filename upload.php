<?php
session_start();
	if(!isset($_SESSION['username']) ) {
		header ("location: index.php");
	}
?>
<html>
	<head>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
	</head>
		<body>
			<?php   
				$allow = array("gif", "jpeg", "jpg", "png","txt");
				$temp = explode ("." , $_FILES['file']['name']);
				$extension = end($temp);
				if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png")
				|| ($_FILES["file"]["type"] == "text/plain"))
				&& ($_FILES["file"]["size"] < 200000)
				&& in_array($extension, $allow))
				{
					if($_FILES['file']['error'] > 0) {
						?> 
							<div class = "login">
								<h2> Error while uploading </h2>
									<p> <?php echo $_FILES['file']['error'] . "<br> </p>"; ?> 
							</div>
					<?php
                                	}
					else {
                                               
						?> <div class = "login">
							<h2> File upload was successful. </h2>
                                                        	<?php
					                                $con = mysql_connect("mysql15.000webhost.com", "a4636766_dano", "3091997dogz");
	                                                                $db = "a4636766_seminar";
	                                                                $rv = mysql_select_db($db, $con);                       
                                                        		$dir = "uploads";
                                                        		$tmp_name = $_FILES['file']['tmp_name'];
                                                        		$name = $_FILES['file']['name'];
                                                                        $size = $_FILES['file']['size'];
                                                                        $username = $_SESSION['username'];
                                                                        $id = "SELECT id FROM users WHERE username = '" . $username . "'";
                                                                        $uid = mysql_query($id);
                                                                        $row = mysql_fetch_array($uid);
                                                                        $test = $row[0];

									$q = "INSERT INTO files (name, size, path, userid ) VALUES ('" . $name . "','" . $size . "','" . $dir . "/" . $name . "','" . $test .  "')";
									$r = mysql_query($q);	
                                                                        

                                                                        if(!r) { echo mysql_error(); }
								?>
                                                        			<p><?php echo "Upload: " . $name . "<br></p>";?>
						 				<p><?php echo "Type: " . $_FILES["file"]["type"] . "<br></p>";?> 
										<p><?php echo "Size: " . $_FILES["file"]["size"]. "<br></p>";?> 
                                                        			<?php move_uploaded_file($tmp_name, "$dir/$name"); ?>
                                                       				 <p><?php echo "Location: $dir/$name";?></p>
                                                                                 <p>See the list with the uploaded files:</p><a href = "list.php"><p> here</p></a>
                                                        		<?php
                                                        		} }
									else {
              
										?> <div class = "login">
											<h2> Sorry, could not upload your file </h2>
												<p> There was an error during the file uploading. I remind you that you can only upload text, jpg, jpeg, png and gif files!</p>
										   </div>
                                                                        <?php
									}
									?>

					</div>
				
		</body>
</html>


