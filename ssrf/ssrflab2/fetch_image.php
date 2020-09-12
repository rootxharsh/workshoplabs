<?php
$url = $_GET['url'];
$context  = stream_context_create(array('http' =>array('method'=>'HEAD'),"ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
)));
$fd = fopen($url, 'rb', false, $context);
if(preg_grep('/content-type:\s*image\/.*/',array_map('strtolower',stream_get_meta_data($fd)['wrapper_data']))) {
        echo base64_encode(file_get_contents($url,false, stream_context_create(array('http' =>array('method'=>'GET'),"ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
)))));
} else {
        echo "Image invalid - Wrong content type header";
}
fclose($fd);
?>