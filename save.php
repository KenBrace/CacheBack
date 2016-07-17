<?php

include_once("conn.php");

$time = date("Y-m-d H:i:s");

if(isset($_POST['submit'])){
	
	$url = mysqli_real_escape_string($conn, $_POST['url']);
	
	$page = file_get_contents($url);
	$page = mysqli_real_escape_string($conn, $page);
	
	$sql = "INSERT INTO superbot_crons (url, time) VALUES ('$url', '$time')";
	$query = mysqli_query($conn, $sql);
	
	$cron_info = mysqli_query($conn, "SELECT id FROM superbot_crons WHERE url='$url'");
	$row = mysqli_fetch_array($cron_info);
		$cron_id = $row['id'];
	
	$add_page = mysqli_query($conn, "INSERT INTO superbot_pages (cron, page, time) VALUES ('$cron_id', '$page', '$time')");
	
	if($query and $add_page){
		echo "$cron_id";
	} else {
		echo "12";
	}
	
}

mysqli_close($conn);

?>