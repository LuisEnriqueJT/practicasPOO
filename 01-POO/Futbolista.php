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

		public function imprimirDatos(Futbolista $miObjeto){
			$mostrar = "<br><br>:::::Datos del partido:::::::<br>";
			$mostrar.= "<strong> Jugador: </strong>".$miObjeto->nombre." ".$miObjeto->apellido;
			$mostrar.=" #".$miObjeto->dorsal;
			$mostrar.="<br> '".$miObjeto->apodo."'";
			$mostrar.="<br><strong>Posición: </strong>".$miObjeto->posicion."<br>";
			$mostrar.=$miObjeto->tamarillas." tarjetas amarillas y ".$miObjeto->trojas." tarjeta roja<br>";
			return $mostrar;
		}

	}

	class Portero extends Futbolista{
		private $atajadas;

		public function getAtajadas(){
			return $this->atajadas;
		}

		public function setAtajadas($atajadas){
			$this->atajadas = $atajadas;
		}

		public function atajar(){
			echo '<br>Atajadon de '.$this->nombre." ".$this->apellido;
			$this->atajadas++;
		}
	}

?>
