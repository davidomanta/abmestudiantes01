<?php 
include 'conexion.php';

$nombre = $_POST ['estudiante'];
$email = $_POST ['email'];

$query = "INSERT INTO estudiantes (id, nombre, email) VALUES ('','$nombre','$email')";

mysqli_query($conexion, $query);

echo "se realizo el alta";
echo "<br>";
echo "<a href='index.php'>Volver</a>";

mysqli_close($conexion);



?>
        

