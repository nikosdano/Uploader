<?php
session_start();
	if(!isset($_SESSION['username']) ) {
		header ("Location: index.php");
	}
?>
	<html>
		<head>
			<link rel = "stylesheet" type = "text/css" href = "style.css">
		</head>
			<body>
                                <div class = "login"> <h2> List of uploaded files:</h2> 
				<?php
                                $con = mysql_connect("mysql15.000webhost.com", "a4636766_dano", "3091997dogz");
	                        $db = "a4636766_seminar";
	                        $rv = mysql_select_db($db, $con);          
  				$q = "SELECT users.username, files.name FROM users LEFT JOIN files ON users.id = files.userid WHERE files.name IS NOT NULL and name != '' ORDER BY users.username ";
				$r = mysql_query($q);
				while ( $row = mysql_fetch_array($r, MYSQL_ASSOC) )
                                $rows[] = $row;
                                foreach ($rows as $row) { 
                                $username = stripslashes($row['username']); 
                                $file = stripslashes($row['name']);
                                echo '<p style = "color:red">' . $username . ':<br></p>' . '<p> File: </p> <a  href = "uploads/' . $file . '">' . '<center><p style = "color:green">' . $file . '</p></center>' . ' </p></a>'; }
				?>
			</body>
	</html>				 
