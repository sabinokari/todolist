<?php
session_start();
//if (empty($_SESSION["id"])) {
//  header("location:login.php");
//}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Todo List en PHP</title>
</head>
<body>
    <h1>Todo List</h1>

    <form action="agregar_tarea.php" method="POST">
        <label for="tarea">Nueva tarea:</label>
        <input type="text" id="tarea" name="tarea">
        <button type="submit">Agregar tarea</button>
    </form>

    <h2>Tareas Pendientes:</h2>
    <ul>
        <?php
            include 'conexion.php';
            include 'mostrar_tareas.php';
        ?>
    </ul>
</body>
</html>