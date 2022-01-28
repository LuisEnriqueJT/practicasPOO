<?php
	include_once 'Futbolista.php';

	$pp14 = new Futbolista('Pablo','Parra','Parrita','Club puebla','Medio',14);
	$pp14->amonestar();
	$pp14->anotarGol();
	$pp14->anotarGol();
	//var_dump($pp14);
	echo $pp14->imprimirDatos($pp14);

	$as1 = new Portero('Antony','Silva','','Club puebla','Portero',1);
	$as1->amonestar();
	$as1->amonestar();
	//var_dump($as1);

	echo $as1->imprimirDatos($as1);
?>