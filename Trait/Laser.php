<?php

include 'Projector.php';

trait Laser{
	use Projector;
	
	public function power()
	{
		echo 'hallo power';
	}
}