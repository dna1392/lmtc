<html>
<head>
<LINK REL=StyleSheet HREF="style2.css" TYPE="text/css" MEDIA=screen>
</head>
	<body>

            <?php 
	    //ob_start();	session_start()
         require_once("conexion.php");
	    $consulta = " SELECT * from usuario ";
	    $resultado = mysqli_query($con,$consulta);
	?>
	            <div class="contenedor">
				<table  colspan="1px" border="1px" border-collapse= "collapse">
		<th colspan="15px" border-collapse= "collapse" padding="450px" ><h1>ELIMINAR</h1></th>
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
						<td><h2><?php echo "<p style='color:#666;'>".$nomb."</p>";?></h2></td>
						<td><h2><?php echo "<p style='color:#3B3F40;'>".$apell."</p>";?></h2></td>
						<td><h2><?php echo "<p style='color:#666;'>".$usuario."</p>";?><h2></td>
						<td><h2><?php echo "<p style='color:#3B3F40;'>".$documento."</p>";?></h2></td>
						<td><h2><?php echo "<p style='color:#666;'>".$gmail."</p>";?></h2></td>
						<td><h2><?php echo "<p style='color:#3B3F40;'>".$clave."</p>";?></h2></td>
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
                
				</table><br/><h3><a href="menu.html"class="button"style="text-decoration:none">Regresar</a></h3>
				
			
	</body>
</html>