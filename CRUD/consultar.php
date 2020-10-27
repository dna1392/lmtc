<?php require_once("conexion.php");
$consulta="SELECT * FROM usuario";
$resultado=mysqli_query($con,$consulta);
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<LINK REL=StyleSheet HREF="style2.css" TYPE="text/css" MEDIA=screen>
	<meta name="viewport" content="with device-with, initial-scale = 1.0 ">
	<title>vista</title>
</head>
<body>
	<div class="contenedor">
    <table  colspan="1px" border="1px" border-collapse= "collapse">
		<th colspan="15px" border-collapse= "collapse" padding="450px" ><h1>USUARIOS</h1></th>
		<tr  colspan="20px"border-collapse= "collapse" padding="450px">
		    <td>NOMBRE</td>
			<td>APELLIDO</td>
			<td>USUARIO</td>
			<td>DOCUMENTO</td>
			<td>GMAIL</td>
			<td>CLAVE</td>
		</tr>
	</div>
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
        <tr aling="center" style = 'altura: 20px';>
	            <td> <?php echo "<p align = 'top'>".$nomb."</p>"; ?> </td>
	            <td> <?php echo "<p align = 'top'>".$apell."</p>"; ?> </td>
	            <td> <?php echo "<p align = 'top'>".$user."</p>"; ?> </td>
	            <td> <?php echo "<p align = 'center'>".$documento."</p>"; ?> </td>
	            <td> <?php echo "<p align = 'center'>".$correo."</p>"; ?> </td>
	            <td> <?php echo "<p align = 'center'>".$pw."</p>"; ?> </td>
	            <td> <a href="modificar1.php" class="btn btn-pencil"> Editar </a> </td>
	            <td> <a href="eliminar.php" class="btn btn-danger"> Borrar </a> </td>
	        </tr> 
	    <?php
             }
        ?>
 </table><br/><h3><a href="menu.html"class="button"style="text-decoration:none">Regresar</a></h3> </a>

         