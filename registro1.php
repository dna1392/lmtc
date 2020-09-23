<?php
include("miconexion.php");
if(isset($_POST['nomb'])&&!empty($_POST['nomb'])&&
		isset($_POST['apell']) &&!empty($_POST['apell'])&&
		isset($_POST['user'])&&!empty($_POST['user'])&&
		isset($_POST['rol'])&&!empty($_POST['rol'])&&
		isset($_POST['documento'])&&!empty($_POST['documento'])&&
		isset($_POST['correo'])&&!empty($_POST['correo'])&&
		isset($_POST['pw'])&&!empty($_POST['pw'])&&!empty($_POST['pw1'])&&
		$_POST['pw']==$_POST['pw1'])
	{
		$con=mysqli_connect($host,$user,$pw,$db) or die("problemas al conectar el servidor");
		mysqli_query($con,"INSERT INTO usuario(nomb,apell,usuario,n_rol,n_documento,gmail,clave) 
		VALUES ('$_POST[nomb]','$_POST[apell]','$_POST[user]','$_POST[rol]','$_POST[documento]','$_POST[correo]','$_POST[pw]')") or die ("fallas en la grabacion".mysqli_error($con));
		echo '<script>
		alert("registro exitoso");
		window.history.go(-1);
		</script>';

		echo "ALFIN.....Grabado<br>";	
		//header('Location: registro.html');

		echo "<font size='36' color='red'>Registro agregado con exito</font>";
		mysqli_close($con);

	}
else
	{
		echo "Esta vaina no  guardo, quiza su clave no es la misma";
	}
