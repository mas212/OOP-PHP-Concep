<?php

include 'Mobile.php';
include 'Laser.php';

class Galaxy extends Mobile{


	use Laser;

	public function power()
	{
		echo 'index from power';
	}
}

$type = new Galaxy;
//echo $type->battery();
echo $type->power();
//echo $type->capacity();