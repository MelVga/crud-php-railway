<?php
$data = json_decode(file_get_contents("data.json"), true);
$id = $_GET["id"];
unset($data[$id]);
file_put_contents("data.json", json_encode($data));
header("Location: index.php");
