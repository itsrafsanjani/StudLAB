<?php
$jsondata = file_get_contents("file.json");
$json = json_decode($jsondata,true);
echo $json['file'][0]['title'];

?>