<?php 
include 'conexion.php';

if (isset($_GET['id'])) {
$idestudiante = $_GET["id"];}
else {
$idestudiante = "";
}

//exit;
$query = "DELETE FROM estudiantes WHERE id=$idestudiante";

mysqli_query($conexion, $query);

echo "se realizo el borrado";
echo "<br>";
echo "<a href='index.php'>Volver</a>";

mysqli_close($conexion);



?>
        
