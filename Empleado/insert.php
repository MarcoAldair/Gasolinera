<?php
	require_once('actionsEmp.php');
	require_once('../empleado.php');
	if(isset($_POST['insert'])){
		$empleado = new Empleado();
		$action = new actionsEmp();
		$nombreEmp = $_POST['nombreEmp'];
		$apellidoEmp = $_POST['apellidoEmp'];
		$fechaNacEmp = $_POST['fechaNacEmp'];
		$telefonoEmp = $_POST['telefonoEmp'];
		$correoEmp = $_POST['correoEmp'];
		$userEmp = $_POST['userEmp'];
		$passEmp = $_POST['passEmp'];
		$empleado->setIdEmpleado(0);
		$empleado->setNombreEmp($nombreEmp);
		$empleado->setApellidoEmp($apellidoEmp);
		$empleado->setFechaNacEmp($fechaNacEmp);
		$empleado->setTelefonoEmp($telefonoEmp);
		$empleado->setCorreoEmp($correoEmp);
		$empleado->setFotoEmp('');
		$empleado->setUserEmp($userEmp);
		$empleado->setPassEmp($passEmp);
		$action->insert($empleado);
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ingresar Empleado</title>
	<link rel="stylesheet" href="../style/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<div class="container-fluid">
    		<span class="navbar-brand mb-0 h1">Empleados</span>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      		<div class="navbar-nav">
			        <a class="nav-link" aria-current="page" href="view.php">Ver</a>
			        <a class="nav-link active" aria-current="page" href="insert.php">Insertar</a>
			        <a class="nav-link" aria-current="page" href="../index.php">HOME</a>
		      	</div>
		    </div>
  		</div>
	</nav>
	<form class="row mx-auto mt-4" style="width: 800px;" method="post">
		<div class="mb-3 row">
    		<label class="col-sm-2 col-form-label">Nombre</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" name="nombreEmp">
    		</div>
  		</div>
  		<div class="mb-3 row">
    		<label class="col-sm-2 col-form-label">Apellido</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" name="apellidoEmp">
    		</div>
  		</div>
  		<div class="mb-3 row">
    		<label class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
    		<div class="col-sm-10">
      			<input type="date" class="form-control" name="fechaNacEmp">
    		</div>
  		</div>
  		<div class="mb-3 row">
    		<label class="col-sm-2 col-form-label">Telefono</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" name="telefonoEmp">
    		</div>
  		</div>
  		<div class="mb-3 row">
    		<label class="col-sm-2 col-form-label">Email</label>
    		<div class="col-sm-10">
      			<input type="email" class="form-control" name="correoEmp">
    		</div>
  		</div>
  		<div class="mb-3 row">
    		<label class="col-sm-2 col-form-label">Usuario</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" name="userEmp">
    		</div>
  		</div>
  		<div class="mb-3 row">
    		<label class="col-sm-2 col-form-label">Password</label>
    		<div class="col-sm-10">
      			<input type="password" class="form-control" name="passEmp">
    		</div>
  		</div>
  		<div class="mb-3 row">
    		<div class="col-sm-10">
      			<input type="submit" class="btn btn-primary btn-lg" name="insert">
    		</div>
  		</div>
	</form>
</body>
</html>