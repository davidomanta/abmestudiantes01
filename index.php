<?php
require("conexion.php");

$query = "SELECT * FROM estudiantes ORDER BY id ASC";
$estudiantes = mysqli_query($conexion, $query);
?>
<h3>Listado de  Estudiantes</h3>

<div id="formulario">
         <form action= "altas.php" method="POST">
             <table width="600" border="1" cellspacing="0" cellpadding="0">
            <th><label>Estudiante: </label>
            <input type="text" name="estudiante"/><br>
            <label>Email: </label>
            <input type="text" name="email"/><br><br>
            <input type="submit" value="Agregar"/> </th>
            </table>
         </form>
      </div>

<table width="600" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <!-- los titulos de la tabla -->
    <th>ID</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>Editar</th>
    <th>Borrar</th>
  </tr>
  <?php while ($listarestudiantes = mysqli_fetch_assoc($estudiantes)) { ?>
  <tr>
    <td><?php echo $listarestudiantes['id']; ?></td>
    <td><?php echo $listarestudiantes['nombre']; ?></td>
    <td><?php echo $listarestudiantes['email']; ?></td>
    <!-- mete el id como html en el url y lo manda a editar.php  -->
    <td><a href="modificar.php?id=<?php echo $listarestudiantes['id']; ?> ">Modificar</a></td> 
    <td><a href="borrar.php?id=<?php echo $listarestudiantes['id']; ?> ">Borrar</a></td> 
  </tr>
  <?php } ?>
</table>