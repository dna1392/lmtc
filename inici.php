<?php
         session_start();
         include("miconexion.php");
         if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pw']) && !empty($_POST['pw']))
         {
         	$con=mysqli_connect($host,$user,$pw,$db) or die ("Problemas al conectar al servidor");
         	//mysqli_select_db($con,$db) or die ("Problemas al conectar con db");
         	$sel=mysqli_query($con,"SELECT *FROM usuario WHERE usuario='$_POST[user]' AND clave='$_POST[pw]'");
         	$sesion=mysqli_fetch_array($sel);
         
         	if($_POST['pw'] == $sesion['clave'])
         	{
         		$sesion['usuario']=$_POST['user'];
               if($sesion['n_rol']==1)
               {
                  echo "Sesion exitosa";
                  header('Location: maestros_herramientas.html');
               }
               if($sesion['n_rol']==2)
               {
                  echo "Sesion exitosa";
                  header('Location: estudiantes_herramientas.html');
               }
               if($sesion['n_rol']==3)
               {
                  echo "Sesion exitosa";
                  header('Location: acudientes_herramientas.html');
               }

         	}
         	else
         	{
               echo "Usuario y/o contraseña incorrecta";
            }
         }
?>
	