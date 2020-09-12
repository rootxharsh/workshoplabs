<?php
$url = $_GET['url'];
echo base64_encode(file_get_contents($url,false, stream_context_create(array('http' =>array('method'=>'GET'),"ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
)))));
?>