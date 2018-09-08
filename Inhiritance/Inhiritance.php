<?php
//Concep inhirtance
class ParentClass{

}

class ChildClass extends ParentClass{

}



class Fruits {

	public $name;

	public function setName($name){
		$this->name = $name;
	}
}

class Apple extends Fruits{

	public function juice()
	{
		echo "hello juice apple";
	}
}

$apple = new Apple;
$apple->setName("juice"); 
echo $apple->name;