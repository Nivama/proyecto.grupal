<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>trabajo facu</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
	<! ––  color de fondo elegir desde https://htmlcolorcodes.com/es/   el código hexadecimal ––>
  <body background="foto.f.jpeg">


<?php
	/* conexion a la base de datos */
	$connect=mysqli_connect("127.0.0.1", "root", "", "registro");
			
			/* creación de la sentencia SQL que inserta datos */
			$consulta="SELECT * FROM pacientes"; 

?>
	<! ––  titulos en distintos tamaños usando H  ––>
<h2>A/B/M</h2>
<h4>Tabla pacientes</h4>

<! ––  color de letras  ––>
<p style="color: grey;">Chiavassa Martino, Ferreyra Nicolás, Munini Valentina</p>
 
<! –– link para crear nuevo registro  ––>
<a href="alta.php?" class="btn btn-secondary">    <i class="fas fa-user-plus"></i>      </a><br>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>email</th>
            <th>Edad</th>
            <th>Domicilio</th>
			<th>Sangre</th>
          </tr>
        </thead>
        <tbody>

          <?php

          $result_tasks = mysqli_query($connect, $consulta);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['edad']; ?></td>
			<td><?php echo $row['domicilio']; ?></td>
			<td><?php echo $row['sangre']; ?></td>
            <td>
              <a href="modificacion.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="baja.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

<!-- BOOTSTRAP 4 SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>





