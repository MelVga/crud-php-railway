<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("data.json"), true);
    $data = $data ?: [];
    $id = uniqid();
    $data[$id] = ["nombre" => $_POST["nombre"]];
    file_put_contents("data.json", json_encode($data));
}
header("Location: index.php");
