<?php

class Bill{

	public $dinner = 100;

	public $night  = 150;

	public $bill;

	public function __construct($bill = 10){
		return $this->bill = $bill;
	}

	public function dinner($person){
		return $this->bill += $this->dinner * $person;
	}

	public function night($person){
		return $this->bill += $this->night * $person;
	}
}

$bill = new Bill;
echo $bill->dinner(2)->night(3)->bill;