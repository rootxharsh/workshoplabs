<?php
ini_set('display_errors','1');
error_reporting(E_ALL);
$api_path = $_GET['p'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/ssrflab3/".$api_path);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
echo $output;
curl_close($ch);
?>
