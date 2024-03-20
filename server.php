<?php 

header("Content-Type: application/json");

$discContent = file_get_contents('./disc-list.json');

$disc = json_decode($discContent);

echo json_encode($disc);

?>