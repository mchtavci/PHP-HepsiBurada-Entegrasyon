<?php
$merchant_id = "XXX";
$kullanici_adi = "XXX";
$sifre = "XXX";

$service_url = 'https://oms-external.hepsiburada.com/packages/merchantid/'.$merchant_id.'?timespan=24';
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$header = array(    
  'Authorization: Basic '. base64_encode($kullanici_adi.':'.$sifre),
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
$curl_response = curl_exec($curl);
$orders = json_decode($curl_response,true);
if(!isset($orders['code'])){
	$orderCount = count($orders);
	echo "<pre>";
	print_r($orders);
	echo "</pre>";
}
?>