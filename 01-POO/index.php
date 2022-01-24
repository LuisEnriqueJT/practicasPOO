<?php
	include_once 'Futbolista.php';
	$cr7 = new Futbolista("Cristiano","Ronaldo","El bicho","Manchester United","Delantero",7);

	$cr7->anotarGol();
	$cr7->anotarGol();
	$cr7->anotarGol();
	$cr7->anotarGol();
	$cr7->amonestar();
	$cr7->anotarGol();
	$cr7->anotarGol();
	$cr7->amonestar();

	echo $cr7->imprimirDatos($cr7);

?>