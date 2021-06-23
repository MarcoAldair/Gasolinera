<?php
	require_once('../conn.php');
	class actionsEmp{
		public function insert($empleado)
		{
			$db = Db::conectar();
			$select=$db->prepare('INSERT INTO empleado VALUES (:idEmpleado,:nombreEmp,:apellidoEmp,:fechaNacEmp,:telefonoEmp,:correoEmp,:fotoEmp,:userEmp,:passEmp)');
			$select->bindValue('idEmpleado',$empleado->getIdEmpleado());
			$select->bindValue('nombreEmp',$empleado->getNombreEmp());
			$select->bindValue('apellidoEmp',$empleado->getApellidoEmp());
			$select->bindValue('fechaNacEmp',$empleado->getFechaNacEmp());
			$select->bindValue('telefonoEmp',$empleado->getTelefonoEmp());
			$select->bindValue('correoEmp',$empleado->getCorreoEmp());
			$select->bindValue('fotoEmp',$empleado->getFotoEmp());
			$select->bindValue('userEmp',$empleado->getUserEmp());
			$select->bindValue('passEmp',$empleado->getPassEmp());
			if($select->execute()){
				echo '<script> alert("Exito") </script>';
			}else{
				echo '<script> alert("Error") </script>';
			}
		}

		public function show()
		{
			$empList=[];
			$db = Db::conectar();
			$select=$db->query('SELECT * FROM empleado');

			foreach ($select->fetchAll() as $empleado) {
				$tmpEmpleado = new Empleado();
				$tmpEmpleado->setIdEmpleado($empleado['idEmpleado']);
				$tmpEmpleado->setNombreEmp($empleado['nombreEmp']);
				$tmpEmpleado->setApellidoEmp($empleado['apellidoEmp']);
				$tmpEmpleado->setFechaNacEmp($empleado['fechaNacEmp']);
				$tmpEmpleado->setTelefonoEmp($empleado['telefonoEmp']);
				$tmpEmpleado->setCorreoEmp($empleado['correoEmp']);
				$tmpEmpleado->setFotoEmp($empleado['fotoEmp']);
				$tmpEmpleado->setUserEmp($empleado['userEmp']);
				$tmpEmpleado->setPassEmp($empleado['passEmp']);
				$empList[] = $tmpEmpleado;
			}

			return $empList;
		}

		public function getEmpleado($id)
		{
			$db = Db::conectar();
			$select = $db->prepare('SELECT * FROM empleado WHERE idEmpleado = :idEmpleado');
			$select->bindValue('idEmpleado',$id);
			$select->execute();
			$empleado = $select->fetch();
			$tmpEmpleado = new Empleado();
			$tmpEmpleado->setIdEmpleado($empleado['idEmpleado']);
			$tmpEmpleado->setNombreEmp($empleado['nombreEmp']);
			$tmpEmpleado->setApellidoEmp($empleado['apellidoEmp']);
			$tmpEmpleado->setFechaNacEmp($empleado['fechaNacEmp']);
			$tmpEmpleado->setTelefonoEmp($empleado['telefonoEmp']);
			$tmpEmpleado->setCorreoEmp($empleado['correoEmp']);
			$tmpEmpleado->setFotoEmp($empleado['fotoEmp']);
			$tmpEmpleado->setUserEmp($empleado['userEmp']);
			$tmpEmpleado->setPassEmp($empleado['passEmp']);

			return $tmpEmpleado;
		}

		public function delete($id)
		{
			$db=Db::conectar();
			$delete = $db->prepare('DELETE FROM empleado
									WHERE idEmpleado = :idEmpleado');
			$delete->bindValue('idEmpleado',$id);
			if($delete->execute()){
				echo '<script> alert("Eliminado") </script>';
				header('Location: view.php');
			}else{
				echo '<script> alert("Error al eliminar") </script>';
			}
		}

		public function modify($empleado)
		{
			$db = Db::conectar();
			$update = $db->prepare('
						UPDATE empleado
						SET
						idEmpleado = :idEmpleado,
						nombreEmp = :nombreEmp,
						apellidoEmp = :apellidoEmp,
						fechaNacEmp = :fechaNacEmp,
						telefonoEmp = :telefonoEmp,
						correoEmp = :correoEmp,
						fotoEmp = :fotoEmp,
						userEmp = :userEmp,
						passEmp = :passEmp
						WHERE idEmpleado = :idEmpleado');
			$update->bindValue('idEmpleado',$empleado->getIdEmpleado());
			$update->bindValue('nombreEmp',$empleado->getNombreEmp());
			$update->bindValue('apellidoEmp',$empleado->getApellidoEmp());
			$update->bindValue('fechaNacEmp',$empleado->getFechaNacEmp());
			$update->bindValue('telefonoEmp',$empleado->getTelefonoEmp());
			$update->bindValue('correoEmp',$empleado->getCorreoEmp());
			$update->bindValue('fotoEmp',$empleado->getFotoEmp());
			$update->bindValue('userEmp',$empleado->getUserEmp());
			$update->bindValue('passEmp',$empleado->getPassEmp());
			if($update->execute()){
				echo '<script> alert("Modificado") </script>';
				header('Location: view.php');
			}else{
				echo '<script> alert("Error al modificar") </script>';
			}
		}
	}	
?>