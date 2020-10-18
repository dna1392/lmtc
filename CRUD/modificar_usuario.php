<?php
// ob_start();
session_start();
include ("conexion.php");
$ingreso = $_GET['nomb'];
$consulta = " SELECT * from usuario WHERE nomb ='$ingreso'";
$resultado = mysqli_query($con,$consulta);
while($fila = mysqli_fetch_assoc($resultado))
{
	
	$nombre=   $fila['nomb'];
	$apellido= $fila['apell'];
	$usuario=  $fila['usuario'];
	$documento=$fila['n_documento'];
	$correo=   $fila['gmail'];
	$pw=       $fila['clave'];
	//
//}
if (isset($_POST['modificando']))
{
	if 
		( isset($_POST['nombre2'])   &&! empty ($_POST['nombre2'])&&
	 isset($_POST['apellido2'])      &&! empty ($_POST['apellido2'])&&
	 isset($_POST['usuario2'])       &&! empty ($_POST['usuario2'])&&
	 isset ($_POST['documento2'])    &&! empty ($_POST['documento2']) &&
	 isset($_POST['gmail2'])         &&! empty ($_POST['gmail2']) &&
	 isset($_POST['clave2'])         &&! empty ($_POST['clave2']))

	{
		$nomb2 = $_POST['nombre2']; 
		$apell2 = $_POST['apellido2'];
		$usua2 = $_POST['usuario2'];
		$docum2 = $_POST['documento2'];
        $gmail2 = $_POST['gmail2'];
		$clave2 = $_POST['clave2'];

        echo $sql = "UPDATE usuario SET nomb= '".$nomb2."', apell = '".$apell2."', usuario = '".$usua2."', n_documento = '".$docum2."', gmail = '".$gmail2."', clave = '".$clave2."' WHERE nomb='".$nombre."' ";
				$con-> query ($sql) or die ("Error al actualizar datos" .mysqli_error ($con));


	if (mysqli_query($con, $sql))
	{
		echo "<p style = 'pgcolor: green;'> MODIFICACION REALIZADA CON EXITO </p>";
		header ('refresh: 1; url=modificar1.php');
     } 
     else
     {
     	echo "Error al guardar:".mysqli_error($con);
     }
     mysqli_close ($con);
	}
	else
	{
		echo "error";
	}
}
}

?>
<html><head><title></title></head>
    <body>
	<form name = "formulario" method="POST" action="">
		<input type= "text" name = "nombre2" value="
	           <?php echo $ingreso;?>"><br>
	    <input type = "text" name = "apellido2" value = "
	           <?php echo $apellido;?>"><br>
	    <input type = "text" name = "usuario2" value = "
	           <?php echo $usuario;?>"><br>
	    <input type = "text" name = "documento2" value = "
	          <?php echo $documento;?>"><br>
	    <input type = "text" name = "gmail2" value = "
	          <?php echo $correo;?>"><br>
	    <input type = "text" name = "clave2" value = "
	          <?php echo $pw;?>"><br>
	    

	    <input type = "submit" value = "CAMBIAR" name ="modificando">
	</form>
<br /> <a href="modificar1.php"> Regresar </a>
</div>
</div>
</body>
</html>
