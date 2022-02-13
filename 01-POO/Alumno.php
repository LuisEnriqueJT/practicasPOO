<?php
	class Alumno{
		//Constantes de clases:: LAS CONSTANTES SON SIEMPRE ATRIBUTOS ESTATICOS POR ELLO SE ACCEDE CON "::"
		const ESCUELA = 'IPN';

		//Atributos estaticos: Aquellos atributos que no necesitan instanciarse para ser accesados a ellos
		private static $nombre;
		private static $apellido;
		private static $boleta;

		//metodos estaticos
		public static function setNombre($nombre){
			self::$nombre = $nombre;
		}

		public static function getNombre(){
			return self::$nombre; 
		}

		public static function setApellido($apellido){
			self::$apellido = $apellido;
		}

		public static function getApellido(){
			return self::$apellido; 
		}

		public static function setBoleta($boleta){
			self::$boleta = $boleta;
		}

		public static function getBoleta(){
			return self::$boleta; 
		}

	}

?>