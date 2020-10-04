<?php
         session_start();
         include("miconexion.php");
         if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pw']) && !empty($_POST['pw']))
         {
         	$con=mysqli_connect($host,$user,$pw,$db) or die ("Problemas al conectar al servidor");
         	//mysqli_select_db($con,$db) or die ("Problemas al conectar con db");
         	$sel=mysqli_query($con,"SELECT *FROM usuario WHERE clave='$_POST[pw]'");
         	$sesion=mysqli_fetch_array($sel);
         
         	if($_POST['clave'] == $sesion['pw'])
         	{
         		$sesion['']=$_POST['user'];
         		echo "Sesion exitosa";
         		header('Location: registro.html');
 

         	}
         	else
         		{echo "Usuario y/o contraseña incorrecta";}
         }
?>
	