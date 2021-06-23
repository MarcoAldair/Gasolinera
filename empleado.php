<?php
	class Empleado{
		private $idEmpleado;
		private $nombreEmp;
		private $apellidoEmp;
		private $fechaNacEmp;
		private $telefonoEmp;
		private $correoEmp;
		private $fotoEmp;
		private $userEmp;
		private $passEmp;

		public function getIdEmpleado(){
			return $this->idEmpleado;
		}

		public function setIdEmpleado($idEmpleado){
			$this->idEmpleado = $idEmpleado;
		}

		public function getNombreEmp(){
			return $this->nombreEmp;
		}

		public function setNombreEmp($nombreEmp){
			$this->nombreEmp = $nombreEmp;
		}

		public function getApellidoEmp(){
			return $this->apellidoEmp;
		}

		public function setApellidoEmp($apellidoEmp){
			$this->apellidoEmp = $apellidoEmp;
		}

		public function getFechaNacEmp(){
			return $this->fechaNacEmp;
		}

		public function setFechaNacEmp($fechaNacEmp){
			$this->fechaNacEmp = $fechaNacEmp;
		}

		public function getTelefonoEmp(){
			return $this->telefonoEmp;
		}

		public function setTelefonoEmp($telefonoEmp){
			$this->telefonoEmp = $telefonoEmp;
		}

		public function getCorreoEmp(){
			return $this->correoEmp;
		}

		public function setCorreoEmp($correoEmp){
			$this->correoEmp = $correoEmp;
		}

		public function getFotoEmp(){
			return $this->fotoEmp;
		}

		public function setFotoEmp($fotoEmp){
			$this->fotoEmp = $fotoEmp;
		}

		public function getUserEmp(){
			return $this->userEmp;
		}

		public function setUserEmp($userEmp){
			$this->userEmp = $userEmp;
		}

		public function getPassEmp(){
			return $this->passEmp;
		}

		public function setPassEmp($passEmp){
			$this->passEmp = $passEmp;
		}
	}
?>