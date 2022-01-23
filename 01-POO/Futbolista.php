<?php
	class Futbolista{
		public $nombre;
		public $apellido;
		public $apodo;
		public $equipo;
		public $posicion;
		public $dorsal;
		public $goles=0;

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setApellido($apellido){
			$this->apellido = $apellido;
		}

		public function getApellido(){
			return $this->apellido;
		}

		public function setApodo($apodo){
			$this->apodo = $apodo;
		}

		public function getApodo(){
			return $this->apodo;
		}

		public function setEquipo($equipo){
			$this->equipo = $equipo;
		}

		public function getEquipo(){
			return $this->equipo;
		}

		public function setPosicion($posicion){
			$this->posicion = $posicion; 
		}	

		public function getPosicion(){
			return $this->posicion;
		}

		public function setDorsal($dorsal){
			$this->dorsal = $dorsal;
		}

		public function getDorsal(){
			return $this->dorsal;
		}

		public function setGoles($goles){
			$this->goles = $goles;
		}

		public function getGoles(){
			return $this->goles;
		}

		public function anotarGol(){
			echo "<br>Goooool de ".$this->nombre." ".$this->apellido;
			$this->goles++; 
		}
	}

	$cr7 = new Futbolista();
	$cr7->setNombre("Cristiano");
	$cr7->setApellido("Ronaldo");
	$cr7->setApodo("El bicho");
	$cr7->setEquipo("Man United");
	$cr7->setPosicion("Delantero");
	$cr7->setDorsal(7);

	echo "Goles de ".$cr7->getNombre()." ".$cr7->getApellido()." en el presente torneo: ".$cr7->getGoles();	

	$cr7->anotarGol();
	$cr7->anotarGol();
	$cr7->anotarGol();
	$cr7->anotarGol();
	$cr7->anotarGol();

	echo "<br>";
	echo "Goles de ".$cr7->getNombre()." ".$cr7->getApellido()." en el presente torneo: ".$cr7->getGoles();


	$lm10 = new Futbolista();
	$lm10->setNombre("Lionel");
	$lm10->setApellido("Messi");
	$lm10->setApodo("La pulga");
	$lm10->setPosicion("Mediocampista");
	$lm10->setEquipo("PSG");
	$lm10->setDorsal(30);

	echo "<br>";
	echo "Goles de ".$lm10->getNombre()." ".$lm10->getApellido()." en el presente torneo: ".$lm10->getGoles();	

	for ($i=0; $i <9 ; $i++) { 
		$lm10->anotarGol();
	}
	
	echo "Goles de ".$lm10->getNombre()." ".$lm10->getApellido()." en el presente torneo: ".$lm10->getGoles();

?>