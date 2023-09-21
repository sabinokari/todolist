<?php
include 'conexion.php';


if (!empty($_POST['tarea'])) {
    $tarea = $_POST['tarea'];
    $sql = "INSERT INTO tareas (tarea, completada) VALUES ('$tarea', 0)";

    if ($conn->query($sql) === TRUE) {
        header('Location: home.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    header('Location: home.php');
}

$conn->close();
?>