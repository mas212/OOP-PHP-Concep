<?php

class Cart{

    public $product_name;
	public $qty;
	public $subtotal;
	public $total;

	public function getProductDetails($product_name, $qty, $subtotal, $total){
		$this->product_name = $product_name;
		$this->qty 			= $qty;
		$this->subtotal 	= $subtotal;
		$this->total 		= $total;
	}
}

$product = new Cart;

$product->getProductDetails('buku laravel', 10, 11, 12);

echo $product->product_name;