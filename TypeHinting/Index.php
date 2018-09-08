<?php
include "Person.php";
class Book(){
	protected $price;
	protected $authors;

	public function getPrice(int $price){
		 $this->price = $price;
	}

	public function authors(Person $person){
	 	$this->authors = $person->name;
	}
}

$books = new Book;
$books->getPrice(1000);
echo $books->price;

$authors = new Person; 
$books->authors($authors);
echo $books->authors;