

<?php
	/* conexion a la base de datos */
	$connect=mysqli_connect("127.0.0.1", "root", "", "registro");
			
		
		




if(isset($_GET['id'])) {
  $id = $_GET['id'];
  	/* creación de la sentencia SQL que inserta datos */
  $consulta = "DELETE FROM pacientes WHERE id = $id" ;
  $result = mysqli_query($connect, $consulta);
  if(!$result) {
    die("error en la consulta.");
  }

  $_SESSION['message'] = 'Paciente borrado satisfactoriamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: lista.php');
}


?>
