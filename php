<?php 
$url = 'https://air-quality-api.open-meteo.com/v1/air-quality?latitude=53.48&longitude=-2.24&hourly=european_aqi';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$res = curl_exec($ch);
if(curl_error($ch)) {
    
}
curl_close($ch);

$json = json_decode($res);


?>

<br>
<br>

<?php
//for ($i = 0; $i <= count($json->hourly->time) - 1; $i++) {
//  echo "$i: ". $json->hourly->european_aqi[$i] . "<br>";
//}

echo $json->hourly->european_aqi[10];
?>
