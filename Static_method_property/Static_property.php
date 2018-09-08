<?php

class Invoice {

	static public $product_name = "iphone";

	static public getProductName()
	{
		return selft::$product_name = "iphone murah";
	}
}

echo Invoice::$product_name;