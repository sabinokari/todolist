<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM tareas WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header('Location: home.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>