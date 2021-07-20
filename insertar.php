<html>
<body>
<?php
	/* conexion a la base de datos */
	$connect=mysqli_connect("127.0.0.1", "root", "", "registro");

			/* traspaso de datos ingresados en la página anterior */
			$nombre2= $_POST ['nombre'];
			$email2= $_POST ['email'];
			$edad2= $_POST ['edad'];
			$domicilio2= $_POST ['domicilio'];
			$sangre2= $_POST ['sangre'];
			
			/* creación de la sentencia SQL que inserta datos */
			$consulta="insert into pacientes  (nombre, email, edad,domicilio, sangre) values ('$nombre2','$email2','$edad2','$domicilio2','$sangre2')";
	
	/* ejecución de la sentencia creada*/	
	$resultado=mysqli_query($connect,$consulta);
		
	header('Location: lista.php');

?>


</body>
</html>
