<?php
	class Futbolista{
		private $nombre;
		private $apellido;
		private $apodo;
		private $equipo;
		private $posicion;
		private $dorsal;
		protected $goles;
		protected $tamarillas;
		protected $trojas;

		//Constructor: 
		public function __construct($nombre, $apellido, $apodo, $equipo, $posicion, $dorsal){
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->apodo = $apodo;
			$this->equipo = $equipo;
			$this->posicion = $posicion; 
			$this->dorsal = $dorsal;
			$this->goles = 0;
			$this->tamarillas=0;
			$this->trojas=0;
		} 

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


		public function setTamarillas($tamarillas){
			$this->tamarillas = $tamarillas;
		}

		public function getTamarillas(){
			return $this->tamarillas;
		}

		public function setTrojas($trojas){
			$this->trojas = $trojas;
		}

		public function getTrojas(){
			return $this->trojas;
		}

		public function amonestar(){
			echo "<br>Amonestación para ".$this->nombre." ".$this->apellido;
			$this->tamarillas++;
			if($this->tamarillas==2){
				$this->trojas++;
			}
		}

		public function expulsar(){			
			$this->trojas++;
		}

		public function anotarGol(){
			echo "<br>Goooool de ".$this->nombre." ".$this->apellido;
			$this->goles++; 
		}

		public function imprimirDatos(){
			$mostrar = "<br><br>:::::Datos del partido:::::::<br>";
			$mostrar.= "<strong> Jugador: </strong>".$this->nombre." ".$this->apellido;
			$mostrar.=" #".$this->dorsal;
			$mostrar.="<br> '".$this->apodo."'";
			$mostrar.="<br><strong>Posición: </strong>".$this->posicion;
			$mostrar.="<br>Termina el partido con ".$this->goles." goles<br>";
			$mostrar.=$this->tamarillas." tarjetas amarillas y ".$this->trojas." tarjeta roja";
			return $mostrar;
		}

	}

	$cr7 = new Futbolista("Cristiano","Ronaldo","El bicho","Manchester United","Delantero",7);

	$cr7->anotarGol();
	$cr7->anotarGol();
	$cr7->anotarGol();
	$cr7->anotarGol();
	$cr7->amonestar();
	$cr7->anotarGol();
	$cr7->anotarGol();
	$cr7->amonestar();

	echo $cr7->imprimirDatos();


/*	:::::: Video 220: CLASES, ATRIBUTOS Y METODOS ::::::::::: 
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

	var_dump($cr7); 
*/
?>
