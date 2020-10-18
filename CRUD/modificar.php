<!DOCTYPE html>
<html>
<head>
	<title>Practica php</title>
</head>
<body>
	<?php
	include("conexion.php");
	//$consulta = "SELECT * from usuario";
	//$resultado=mysqli_query ($con, $consulta);
	$consulta="SELECT * from usuario";
	$resultado=$con-> query ($consulta) or die (mysqli_error($con));
	?>
	<table width="40%" border ="2" bgcolor ="">
	<tr>

			<td>NOMBRE</td>
			<td>APELLIDO</td>
			<td>USUARIO</td>
			<td>DOCUMENTO</td>
			<td>GMAIL</td>
	<td>ROL</td>
</tr>
<?php
while($fila = $resultado-> fetch_assoc())
{
	echo "<tr>";
	//echo "<td>; echo $fila['id_usuario']; echo "</ted>";
	echo "<td>"; echo $fila ['nomb']; echo "</td";
	echo "<td>"; echo $fila ['apell']; echo "</td";
	echo "<td>"; echo $fila ['usuario']; echo "</td";
	echo "<td>"; echo $fila ['n_documento']; echo "</td";
	echo "<td>"; echo $fila ['gmail']; echo "</td";
	echo "<td>"; echo $fila ['n_rol']; echo "</td";
	echo "<td> <a href='modificar_usuario.php?Ndocumento=".$fila['n_documento']."'> 
                   <button type = 'button' class = 'btn btn-success'> Modificar </button> </a> </td> ";
                  // echo "<td> <a href='eliminar_prod.php?no=".$fila['no']."'> 
                  // <button type = 'button' class = 'btn btn-danger'> Eliminar </button> </a> </td> ";
                echo "</tr>";
    ?>
    <?php
    ?>
</table>
<br />
<a href="index.php"> Regresar </a>
</body>
</html>


	



	
	
	

}

</body>
</html>