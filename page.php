<!DOCTYPE html>

<html>
	<head>
		<title>Page | Page Saver</title>
	</head>
	<body>
	
		<?php
		
		include_once("conn.php");
		include_once("functions.php");
		
		$cron_id = mysqli_real_escape_string($conn, $_GET['id']);
		
		$sql = "SELECT * FROM superbot_pages WHERE cron='$cron_id' ORDER BY id DESC";
		$query = mysqli_query($conn, $sql);
		if(!$query){
			echo "There was an error fetching the database information!";
			exit();
		} else {
			$cron_info = mysqli_query($conn, "SELECT url FROM superbot_crons WHERE id='$cron_id'");
			$row1 = mysqli_fetch_array($cron_info);
				$url = $row1['url'];
				
			while($row = mysqli_fetch_array($query)){
				$id = $row['id'];
				$time = convert_time($row['time']);
				
				echo "<p><a href='view.php?id=$id'>$url</a> | $time</p><br>";
			}
		}
		
		mysqli_close($conn);
		
		?>
		
	</body>
</html>