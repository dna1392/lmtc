<?php
// Extraemos el nombre y el email del registro con id = 3

$documento = 3;

include('miconexion.php');

$query_tb = "SELECT documento FROM usuario where id ='$id'";
$recupero1 = mysql_query($query_tb, $conexion_db) or die(mysql_error());
// ------------------------------------------------------------------------
$rec_nombre=""; 
while ($row_tb=mysql_fetch_assoc($recupero1))
{ 
$rec_nombre = ($row_tb['documento'].""); 
}
echo "$rec_nombre <br>";
// ------------------------------------------------------------------------
// ------------------------------------------------------------------------

?>
