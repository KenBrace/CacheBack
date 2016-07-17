<?php

include_once("conn.php");

$time = date("Y-m-d H:i:s");

$sql = "SELECT * FROM superbot_crons";
$query = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($query)){
	$id = $row['id'];
	$url = $row['url'];
	
	$html = file_get_contents($url);
	$html = mysqli_real_escape_string($conn, $html);
	
	$save_page = mysqli_query($conn, "INSERT INTO superbot_pages (cron, page, time) VALUES ('$id', '$html', '$time')");
}

mysqli_close($conn);

?>