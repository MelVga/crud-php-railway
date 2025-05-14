<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Lista de registros</h1>
    <?php
    $data = json_decode(file_get_contents("data.json"), true);
    echo "<table><tr><th>Nombre</th><th>Acciones</th></tr>";
    foreach ($data as $id => $item) {
        echo "<tr>
                <td>{$item['nombre']}</td>
                <td>
                    <a href='editar.php?id=$id'>Editar</a> |
                    <a href='eliminar.php?id=$id'>Eliminar</a>
                </td>
              </tr>";
    }
    echo "</table>";
    ?>
    <form action="agregar.php" method="POST">
        <input type="text" name="nombre" required placeholder="Nuevo nombre">
        <button type="submit">Agregar</button>
    </form>
</body>
</html>
