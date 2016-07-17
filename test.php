<?php
/*
$url = "http://neigongforum.com/login/login";

$postdata = "login=KenBrace&register=0&password=Sk84kenbrace&remember=1&cookie_check=1&redirect=%2F&_xfToken=";

$postinfo = $postdata;

$cookie_file_path = "/cookie.txt";

$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_NOBODY, false);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
//set the cookie the site has for certain features, this is optional
curl_setopt($ch, CURLOPT_COOKIE, "cookiename=0");
curl_setopt($ch, CURLOPT_USERAGENT,
    "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, $_SERVER['REQUEST_URI']);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
$exe = curl_exec($ch);

if(!$exe){
	echo "eror";
} else {
	echo "done";
}

//page with the content I want to grab
curl_setopt($ch, CURLOPT_URL, "http://neigongforum.com/threads/banning-sleeper-accounts.947/#post-10634");
//do stuff with the info with DomDocument() etc
echo $html = curl_exec($ch);

if(!$html){
	echo "eror";
} else {
	echo "all good";
}

curl_close($ch);


*/


/*
$username = "KenBrace";
$password = "Sk84kenbrace";
$url = "http://neigongforum.com/index.php?login/login";

$curl_handle = curl_init();
curl_setopt($curl_handle, CURLOPT_URL, $url);
curl_setopt($curl_handle, CURLOPT_COOKIESESSION, true);
curl_setopt ($curl_handle, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt ($curl_handle, CURLOPT_COOKIEFILE, 'cookie.txt');

curl_setopt ($curl_handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_handle, CURLOPT_HEADER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:11.0) Gecko/20100101 Firefox/11.0");
curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, 1);
$post_array = array('login' => $username, 'password' => $password, 'cookie_check' => 1, 'redirect' => 'http://neigongforum.com/index.php', 'register' => 0, 'remember' => 1);
curl_setopt($curl_handle, CURLOPT_POSTFIELDS, http_build_query($post_array));
$output = curl_exec($curl_handle);

if(!$output){
	echo "error";
} else {
	echo "done";
}

curl_close($curl_handle);*/

//Now logged in

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://neigongforum.com/threads/banning-sleeper-accounts.947/#post-10634");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_COOKIEJAR, '/cookies.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, '/cookies.txt');

echo $output = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);

?>