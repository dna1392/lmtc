<?php require_once("conexion.php");
$consulta="SELECT * FROM usuario";
$resultado=mysqli_query($con,$consulta);
?>
<html lang= "en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="with device-with, initial-scale = 1.0 ">
	<title>vista</title>
</head>
<body>
    <table aling = "center" border="3px" style = 'background-color: #D3D3D3;'>
		<th colspan="4"><h2>USUARIOS</h2></th>
		<tr aling = "center" bgcolor="# 87CEFA">
			<td>NOMBRE</td>
			<td>APELLIDO</td>
			<td>USUARIO</td>
			<td>DOCUMENTO</td>
			<td>GMAIL</td>
			<td>CLAVE</td>
		</tr>
	<?php
	   while ($filas=mysqli_fetch_assoc($resultado))
	   {
	   	$nomb=$filas['nomb'];
	   	$apell=$filas['apell'];
	    $user=$filas['usuario'];
	   	$documento=$filas['n_documento'];
	   	$correo=$filas['gmail'];
	   	$pw=$filas['clave'];
    ?>
        <tr bgcolor = "# 9370DB" style = 'altura: 20px';>
	            <td> <?php echo "<p align = 'top'>".$nomb."</p>"; ?> </td>
	            <td> <?php echo "<p align = 'top'>".$apell."</p>"; ?> </td>
	            <td> <?php echo "<p align = 'top'>".$user."</p>"; ?> </td>
	            <td> <?php echo "<p align = 'center'>".$documento."</p>"; ?> </td>
	            <td> <?php echo "<p align = 'center'>".$correo."</p>"; ?> </td>
	            <td> <?php echo "<p align = 'center'>".$pw."</p>"; ?> </td>
	            <td> <a href="#" class="btn btn-pencil"> Editar </a> </td>
	            <td> <a href="eliminar.php" class="btn btn-danger"> Borrar </a> </td>
	        </tr> 
	    <?php
             }
        ?>
</table> <a href="index.php"> Regresar </a>

         