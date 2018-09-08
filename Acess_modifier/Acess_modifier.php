<?php

class User {

	public $name = "mas harry";

	private $password;

	protected $email = "a@mail.com"

	public function getPassword($password = "123"){
		return $this->password = $password;
	}
}

class Admin extends User{

	public function __contruct($email){
		return $this->email = $email;
	}
}

$admin = new Admin();
echo $admin->email;