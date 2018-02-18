<?php
require("conexion.php");


if (isset($_GET['id'])) {
$idestudiante = $_GET["id"];}
else {
$idestudiante = "";
}

if (isset($_GET['action'])) {
$action = $_GET["action"];
} else {
$action = "";
}

if ($action == "edit") {
	$idestudiante = $_POST["id"];
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
        
	$sql = "UPDATE estudiantes SET ";
	//$sql.= "nombre="".$nombre."";
        $sql.= "nombre='$nombre', email='$email' ";
        $sql.= "WHERE id=".$idestudiante;
	mysqli_query($conexion, $sql);

}

$sql = "SELECT * FROM estudiantes WHERE id =".$idestudiante;
$queEstudiantemodifico = mysqli_query($conexion, $sql );
$datosdelestudiante = mysqli_fetch_assoc($queEstudiantemodifico);

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Edtitar</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h3>Editar Estudiantes</h3>
<form method="post" id="frEmpresa" action="modificar.php?action=edit">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $datosdelestudiante["nombre"]; ?>" /> <br />
    <label for="email">Email</label>
    <input type="text" id="email" name="email" value="<?php echo $datosdelestudiante["email"]; ?>" />
    <br />
    <label for="bts">&nbsp;</label>
    <button type="submit">Guardar</button>
    
    <input type="hidden" id="id" name="id" value="<?php echo $datosdelestudiante["id"]; ?>" />
</form>
<a href='index.php'>Volver</a>
</body>
</html>