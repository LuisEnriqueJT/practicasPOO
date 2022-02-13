<?php
	require_once 'autoloader.php';

	//instancia de la clase Futbolista

	$lj11 = new Futbolista();
	$lj11->setNombre("Luis");
	$lj11->setApellido("Jimenez");
	$lj11->setEquipo("Bengala");
	$lj11->setPosicion("Medio");
	$lj11->setDorsal(11);
	$lj11->setApodo("Cepillo");
	echo $lj11->imprimirDatos($lj11);

	$er1 = new Portero();
	$er1->setNombre("Edson");
	$er1->setApellido("Rivas");
	$er1->setEquipo("Bengala");
	$er1->setApodo("Maldito Carnicero");
	$er1->setPosicion("Portero");
	$er1->setDorsal(1);
	echo $er1->imprimirDatos($er1);
?>