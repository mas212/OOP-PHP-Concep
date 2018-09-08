<?php

include "SpecialPriceInterface";
class Cart implements SpecialPriceInterface{
	public function getPrice()
	{
		echo "display";
	}
}

$cart = new Cart;
echo $cart->getPrice();