<?php
	/* conexion a la base de datos */
	$connect=mysqli_connect("127.0.0.1", "root", "", "registro");


/*inicializa en blanco variables auxiliares */
$nombre2 = '';
$email2= '';
$edad2 = '';
$domicilio2= '';
$sangre2 = '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $consulta = "SELECT * FROM pacientes WHERE id=$id";
  $result = mysqli_query($connect, $consulta);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre2 = $row['nombre'];
    $email2 = $row['email'];
    $edad2 = $row['edad'];
    $domicilio2 = $row['domicilio'];
    $sangre2 = $row['sangre'];

	
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre2 = $_POST['nombre'];
  $email2 = $_POST['email'];
  $edad2 = $_POST['edad'];
  $domicilio2 = $_POST['domicilio'];
  $sangre = $_POST['sangre'];

  $actualiza = "UPDATE pacientes set nombre = '$nombre2', email = '$email2', edad = '$edad2', domicilio = '$domicilio2', sangre = '$sangre2'      WHERE id=$id";
 
 mysqli_query($connect, $actualiza);
  $_SESSION['message'] = 'Paciente actualizado correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: lista.php');
}

?>


      <form action="modificacion.php?id=<?php echo $_GET['id']; ?>" method="POST">
        
        <input name="nombre" type="text" class="form-control" value="<?php echo $nombre2; ?>" placeholder="Update Title">
		<input name="email" type="text" class="form-control" value="<?php echo $email2; ?>" placeholder="Update Title">	                
		<input name="edad" type="text" class="form-control" value="<?php echo $edad2; ?>" placeholder="Update Title">
		<input name="domicilio" type="text" class="form-control" value="<?php echo $domicilio2; ?>" placeholder="Update Title">
		
        <button class="btn-success" name="update">Modificar</button>
      </form>

