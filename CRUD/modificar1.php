<html>
<head>
<LINK REL=StyleSheet HREF="style2.css" TYPE="text/css" MEDIA=screen>
</head>
    <body>

<?php
include("conexion.php");

    $consulta="SELECT * FROM usuario";
    $resultado= $con->query($consulta) or die (mysqli_error($con));
?>
  <div class="contenedor">
   <table width= "40%" border="2" bgcolor="">
  <th colspan="15px" border-collapse= "collapse" padding="450px" ><h1>MODIFICAR</h1></th>

   	<tr>
  <td>NOMBRES</td>
  <td>APELLIDOS</td>
  <td>USUARIOS</td>
  <td>DOCUMENTO</td>
  <td>CORREO</td>
  <td>CLAVE</td>
 </tr>
 </div>

<?php
  while($fila=$resultado->fetch_assoc())
  {
  	echo "<tr>";
  	//<td>NOMBREA</td>
    echo "<td>"; echo $fila['nomb']; echo "</td>";
    echo "<td>"; echo $fila['apell']; echo "</td>";
    echo "<td>"; echo $fila['usuario']; echo "</td>";
    echo "<td>"; echo $fila['n_documento']; echo "</td>";
    echo "<td>"; echo $fila['gmail']; echo "</td>";
    echo "<td>"; echo $fila['clave']; echo "</td>";
    echo "<td><a href='modificar_usuario.php?nomb=".$fila['nomb']."'> 
                   <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
    echo "</tr>"

  
  ?>
  <?php
}
?>

</table>
<br/>
<h3><a href="menu.html"class="button"style="text-decoration:none">Regresar</a></h3>
</body>
</html>



        


  