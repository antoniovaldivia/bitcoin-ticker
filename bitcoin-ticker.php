<?php

$f="https://api.coindesk.com/v1/bpi/currentprice.json";

$file=file_get_contents($f);
if($file==""){
$coindeskusd = "N/A";
	print("error:cant get file");
	return;
}
$myjson = json_decode($file);
$coindeskusd = $myjson->bpi->USD->rate;
$coindeskusd = substr($coindeskusd, 0, -2);
echo $coindeskusd ." USD";

?>