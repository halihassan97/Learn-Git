<?php

// $http_client_ip=$_SERVER['HTTP_CLIENT_IP'];
// $http_forworded_for=$_SERVER['HTTP_FORWARDED_FOR'];
// $remote_addr=$_SERVER['REMOTE_ADDR'];

// if (!empty($http_client_ip)) {
// 	$ipaddress=$http_client_ip;
// }elseif (!empty($http_forworded_for)) {
// 	$ipaddress=$http_forworded_for;
// }elseif (!empty($remote_addr)) {
// 	$ipaddress=$remote_addr;
// }


// echo $ipaddress;


    echo file_get_contents('https://ipapi.co/currency/');



$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);


if ($result->status=='success') {
	echo"Country:".$result->country.'<br>';
	echo"Region:".$result->regionName.'<br>';
	echo"City:".$result->city.'<br>';
	echo"City:".$result->city.'<br>';
	if (isset($result->lat) && isset($result->lon)) {
		echo"Lat:".$result->lat.'<br>';
		echo"Lon:".$result->lon.'<br>';
	}
	
	echo"IP:".$result->query.'<br>';
}
?>