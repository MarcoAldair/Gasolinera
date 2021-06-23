<?php
	require_once('actionsEmp.php');
	require_once('../conn.php');
	require_once('../empleado.php');
	$action = new actionsEmp();
	$empList = $action->show();

	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$action->delete($id);
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Empleados</title>
	<link rel="stylesheet" href="../style/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<div class="container-fluid">
    		<span class="navbar-brand mb-0 h1">Empleados</span>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      		<div class="navbar-nav">
			        <a class="nav-link active" aria-current="page" href="view.php">Ver</a>
			        <a class="nav-link" aria-current="page" href="insert.php">Insertar</a>
			        <a class="nav-link" aria-current="page" href="../index.php">HOME</a>
		      	</div>
		    </div>
  		</div>
	</nav>
	<table class="table table-dark table-hover table-sm align-middle text-center">
		<thead>
			<tr>
				<th>ID Empleado</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Fecha Nacimiento</th>
				<th>Telefono</th>
				<th>Correo</th>
				<th>User</th>
				<th colspan="2">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($empList as $empleado) { ?>
				<tr>
					<td><?php echo $empleado->getIdEmpleado(); ?></td>
					<td><?php echo $empleado->getNombreEmp(); ?></td>
					<td><?php echo $empleado->getApellidoEmp(); ?></td>
					<td><?php echo $empleado->getFechaNacEmp(); ?></td>
					<td><?php echo $empleado->getTelefonoEmp(); ?></td>
					<td><?php echo $empleado->getCorreoEmp();?></td>
					<td><?php echo $empleado->getUserEmp();?></td>
					<td><a href="modify.php?modify=<?php echo $empleado->getIdEmpleado();?>" class="btn btn-primary">Modificar</a></td>
					<td><a href="?delete=<?php echo $empleado->getIdEmpleado();?>" class="btn btn-danger">Eliminar</a></td>
				</tr>
			<?php }?>
		</tbody>
	</table>
</body>
</html>