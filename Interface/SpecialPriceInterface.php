<?php
interface SpecialPriceInterface{
	protected $price;
	
	public function __construct($price = 10000){
		return $this->price = $price;
	}
}