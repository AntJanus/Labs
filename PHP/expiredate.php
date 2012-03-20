<?php
// expire date extractor

// given that "$key" 

foreach($_POST as $key => $value){
$value = urlencode(stripslashes($value));
if($key == "expire_date"){
$value = urldecode($value);
$value = ereg_replace("[^0-9]", "", $value);	
echo $value;
}

$data .= "$key=$value&";
}