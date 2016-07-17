<?php

function convert_time($time){
	
	$seconds = strtotime(date('Y-m-d H:i:s', strtotime('+60 seconds', strtotime($time))));
	$minutes = strtotime(date('Y-m-d H:i:s', strtotime('+60 minutes', strtotime($time))));	
	$hours = strtotime(date('Y-m-d H:i:s', strtotime('+24 hours', strtotime($time))));
	$week = strtotime(date('Y-m-d H:i:s', strtotime('+7 days', strtotime($time))));
	
	$seconds_left = time() - strtotime($time);
	if($seconds_left == 1){
		$seconds_left = $seconds_left . " second ago";
	} else {
		$seconds_left = $seconds_left . " seconds ago";
	}
	$minutes_left =  floor((time()/60) - (strtotime($time)/60));
	if($minutes_left == 1){
		$minutes_left = $minutes_left . " minute ago";
	} else {
		$minutes_left = $minutes_left . " minutes ago";
	}
	$hours_left = floor((time()/(60*60)) - (strtotime($time)/(60*60)));
	if($hours_left == 1){
		$hours_left = $hours_left . " hour ago";
	} else {
		$hours_left = $hours_left . " hours ago";
	}
	
	if($seconds > time()){
		$time = $seconds_left;
	} else if($minutes > time()) {
		$time = $minutes_left;
	} else if($hours > time()) {
		$time = $hours_left;
	} else if($week > time()) {
		$time = date("l", strtotime($time)) . " at " . date("h:m A", strtotime($time));
	} else {
		$time = date("M d, Y",strtotime($time));
	}
	
	return $time;
	
}

function real_time($time){
	
	$time = date("M d, Y", strtotime($time)) . " at " . date("h:m A", strtotime($time));
	
	return $time;
	
}

function plain_time($time){
	
	$time = date("M d, Y", strtotime($time));
	
	return $time;
	
}

function ago_time($time){
	
	$seconds = strtotime(date('Y-m-d H:i:s', strtotime('+60 seconds', strtotime($time))));
	$minutes = strtotime(date('Y-m-d H:i:s', strtotime('+60 minutes', strtotime($time))));	
	$hours = strtotime(date('Y-m-d H:i:s', strtotime('+24 hours', strtotime($time))));
	$week = strtotime(date('Y-m-d H:i:s', strtotime('+7 days', strtotime($time))));
	
	$seconds_left = time() - strtotime($time);
	if($seconds_left == 1){
		$seconds_left = $seconds_left . " second ago";
	} else {
		$seconds_left = $seconds_left . " seconds ago";
	}
	$minutes_left =  floor((time()/60) - (strtotime($time)/60));
	if($minutes_left == 1){
		$minutes_left = $minutes_left . " minute ago";
	} else {
		$minutes_left = $minutes_left . " minutes ago";
	}
	$hours_left = floor((time()/(60*60)) - (strtotime($time)/(60*60)));
	if($hours_left == 1){
		$hours_left = $hours_left . " hour ago";
	} else {
		$hours_left = $hours_left . " hours ago";
	}
	
	if($seconds > time()){
		$time = $seconds_left;
	} else if($minutes > time()) {
		$time = $minutes_left;
	} else if($hours > time()) {
		$time = $hours_left;
	} else {
		$time = $hours_left;
	}
	
	return $time;
	
}

function short_time($time){
	$seconds = strtotime(date('Y-m-d H:i:s', strtotime('+60 seconds', strtotime($time))));
	$minutes = strtotime(date('Y-m-d H:i:s', strtotime('+60 minutes', strtotime($time))));	
	$hours = strtotime(date('Y-m-d H:i:s', strtotime('+24 hours', strtotime($time))));
	$week = strtotime(date('Y-m-d H:i:s', strtotime('+7 days', strtotime($time))));
	
	$seconds_left = time() - strtotime($time);
	if($seconds_left == 1){
		$seconds_left = $seconds_left . " second ago";
	} else {
		$seconds_left = $seconds_left . " seconds ago";
	}
	$minutes_left =  floor((time()/60) - (strtotime($time)/60));
	if($minutes_left == 1){
		$minutes_left = $minutes_left . " minute ago";
	} else {
		$minutes_left = $minutes_left . " minutes ago";
	}
	$hours_left = floor((time()/(60*60)) - (strtotime($time)/(60*60)));
	if($hours_left == 1){
		$hours_left = $hours_left . " hour ago";
	} else {
		$hours_left = $hours_left . " hours ago";
	}
	
	if($seconds > time()){
		$time = $seconds_left;
	} else if($minutes > time()) {
		$time = $minutes_left;
	} else if($hours > time()) {
		$time = $hours_left;
	} else if($week > time()) {
		$time = date("l", strtotime($time));
	} else {
		$time = date("M d, Y",strtotime($time));
	}
	
	return $time;
}

function ip(){
	return $_SERVER['REMOTE_ADDR'];
}

function convert_number($number){
	
	$number = str_replace(".00", "", (string)number_format ($number, 2, ".", ","));
	
	if(substr($number, -1, 1) == "0" and substr($number, -3, 1) == "."){
		$number = substr($number, 0, -1);
	}
	
	return $number;
	
}

?>