<html>
<head><title></title>
</head>
	<body>
	<?php 
	    //ob_start();	session_start()
         require_once("conexion.php");
	    $consulta = " SELECT * from usuario ";
	    $resultado = mysqli_query($con,$consulta);
	?>
				<table width="40%" border="2">
	            <tr>
					<td>NOMBRE</td>
					<td>APELLIDO</td>
					<td>USUARIO</td>
	                <td>DOCUMENTO</td>
	                <td>GMAIL</td>
	                <td>CLAVE</td>

				  </tr>
	<?php         
		        while($fila=mysqli_fetch_assoc($resultado))
		        {
		            $nomb=$fila['nomb'];
					$apell=$fila['apell'];
					$usuario=$fila['usuario'];
					$documento=$fila['n_documento'];
					$gmail=$fila['gmail'];
					$clave=$fila['clave'];	
	?>               
					  <tr>
						<td><?php echo "<p style='color:#666;'>".$nomb."</p>";?></td>
						<td><?php echo "<p style='color:#ccc;'>".$apell."</p>";?></td>
						<td><?php echo "<p style='color:#666;'>".$usuario."</p>";?></td>
						<td><?php echo "<p style='color:#ccc;'>".$documento."</p>";?></td>
						<td><?php echo "<p style='color:#666;'>".$gmail."</p>";?></td>
						<td><?php echo "<p style='color:#ccc;'>".$clave."</p>";?></td>
		                <td>
		                	<form method="post" action="">
		                    	<input type="submit" value="Eliminame" name="BORRAR" />
		                    </form>
		                </td>
					  </tr>
	<?php		
				}	
	?>	
	<?php		
		if(isset($_POST['BORRAR']))
			{
				$sql = "DELETE FROM usuario WHERE nomb='$nomb'";
				if (mysqli_query($con, $sql)) 
					{
					  header('refresh: 1; url=eliminar.php');
					  echo "<p style='color:green;'>ELIMINACION REALIZADA CON EXITO</p>";
					} 
				else 
					{
					  echo "Error alguardar: " . mysqli_error($con);
					}
				mysqli_close($con);
			}
	?>
				</table><br/><a href="menu.html">Regresar</a>
	</body>
</html>