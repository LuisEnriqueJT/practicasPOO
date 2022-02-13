<?php
/*
	Una clase abtracta es una clase que no se puede instanciar, sino que es creada para servir como molde
	de otras clases que la heredan, de manera que las clases hijas deberan incluir si o si los metodos que
	sean abtractos en la clase padre

	En este ejemplo tenemos que la clase abtracta Maths contiene el metodo abstracto resolver, porque este debera ser
	requerido en todas las clases hijas que heredan de Maths, cada clase hija contiene el mismo metodo pero cada una
	tiene su funcionalidad diferente.
*/
	abstract class Maths{
		public $n1;
		public $n2;
		public $resultado;

		public function __construct($n1, $n2){
			$this->n1 = $n1;
			$this->n2 = $n2;
		}
		abstract public function resolver();

		public function getResult(){
			return $this->resultado."<br>";
		}
	}

	class Suma extends Maths{

		public function resolver(){
			$this->resultado = $this->n1+$this->n2;
		}
	}	

	class Resta extends Maths{

		public function resolver(){
			$this->resultado = $this->n1-$this->n2;
		}

	}

	class Multi extends Maths{

		public function resolver(){
			$this->resultado = $this->n1*$this->n2;
		}

	}

?>