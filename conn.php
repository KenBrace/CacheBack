<?php

$db_host = "";
$db_user = "";
$db_pass = "";
$db_name = "";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(!$conn){
	echo "Sorry, we encountered an error connecting to the database!";
	exit();
}

?>
