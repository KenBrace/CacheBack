<!DOCTYPE html>

<html>
	<head>
		<title>Pages | Page Saver</title>
	</head>
	<body>
		<?php
		
		include_once("conn.php");
		include_once("functions.php");
		
		$cron_id = mysqli_real_escape_string($conn, $_GET['id']);
		
		$sql = "SELECT * FROM superbot_crons WHERE id='$cron_id' ORDER BY id DESC";
		$query = mysqli_query($conn, $sql);
		if(!$query){
			echo "There was an error fetching the database information!";
			exit();
		} else {
			while($row = mysqli_fetch_array($query)){
				$id = $row['id'];
				$url = $row['url'];
				$time = convert_time($row['time']);
				
				echo "<p><a href='page.php?id=$id'>$url</a> | $time</p><br>";
			}
		}
		
		mysqli_close($conn);
		
		?>		
	</body>
</html>