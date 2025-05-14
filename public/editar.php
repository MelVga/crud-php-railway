<?php
$data = json_decode(file_get_contents("data.json"), true);
$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data[$id]["nombre"] = $_POST["nombre"];
    file_put_contents("data.json", json_encode($data));
    header("Location: index.php");
    exit;
}

$nombre = $data[$id]["nombre"];
?>
<form method="POST">
    <input type="text" name="nombre" value="<?= htmlspecialchars($nombre) ?>" required>
    <button type="submit">Guardar</button>
</form>
