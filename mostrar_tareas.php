<?php
$sql = "SELECT id, tarea, completada FROM tareas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $tarea = $row['tarea'];
        $completada = $row['completada'];

        echo "<li>";
        echo "<input type='checkbox' " . ($completada ? 'checked' : '') . " onclick='marcarCompletada($id)'>";
        echo "<span style='text-decoration:" . ($completada ? 'line-through' : 'none') . "'>$tarea</span>";
        echo " <a href='eliminar_tarea.php?id=$id'>Eliminar</a>";
        echo "</li>";
    }
} else {
    echo "<li>No hay tareas pendientes.</li>";
}

$conn->close();
?>
<script>
    function marcarCompletada(id) {
        window.location.href = 'marcar_completada.php?id=' + id;
    }
</script>