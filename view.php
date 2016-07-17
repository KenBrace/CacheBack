<!DOCTYPE html>

<html>
	<head>
		<title>View | Page Saver</title>
	</head>
	<body>
	
		<?php
		
		include_once("conn.php");
		include_once("functions.php");
		
		$id = mysqli_real_escape_string($conn, $_GET['id']);
		
		$sql = "SELECT * FROM superbot_pages WHERE id='$id' ORDER BY id DESC";
		$query = mysqli_query($conn, $sql);
		if(!$query){
			echo "There was an error fetching the database information!";
			exit();
		} else {
			$row = mysqli_fetch_array($query);
				$id = $row['id'];
				$cron = $row['cron'];
				$page = $row['page'];
				$time = convert_time($row['time']);
				
			$cron_info = mysqli_query($conn, "SELECT url FROM superbot_crons WHERE id='$cron' ORDER BY id DESC");
			$row1 = mysqli_fetch_array($cron_info);
				$url = $row1['url'];
				
			echo
			"
			<br><br>
			<center><p><b><a href='$url'>$url</a></b> | $time</p></center>
			<br><br>
			<p>$page</p>
			";
		}
		
		mysqli_close($conn);
		
		?>
		
	</body>
</html>