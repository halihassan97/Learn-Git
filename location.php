<?php
$ip_address=$_SERVER['REMOTE_ADDR'];
/*Getting user IP address details with geoplugin.net*/
$addr_details = @unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip_address));
$city = $addr_details['geoplugin_city'];
$countrycode = $addr_details['geoplugin_countryCode'];
$country = $addr_details['geoplugin_countryName'];
 echo "<b>"."City Name:"."</b>".$city."<br>";
echo "<b>"."Country Code:"."</b>".$countrycode."<br>";
echo "<b>"."Country Name:"."</b>".$country."<br>";
?>