<?php
include('conexion.php');
$query="SELECT id,tarea,completada FROM todolist.tareas order by id desc;";
$rs = mysqli_query($cn,$query);
$html="";
while ($row = mysqli_fetch_assoc($rs)) { 
    $html= $html."<tr>";
    $html= $html."<td>". $row["id"] . "</td>";
    $html= $html."<td>". $row["tarea"] . "</td>";
    $html= $html."<td>". ($row["completada"]==true? "si":"no" ). "</td>";
    $html= $html."</tr>";

}
echo $html;
?>