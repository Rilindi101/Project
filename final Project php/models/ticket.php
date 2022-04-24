<?php
class Ticket{
	private $id;
	private $name;
	private $stadium;
	private $timee;
	private $price;
	private $image;

	function __construct($id,$name,$stadium,$timee,$price,$image){

		$this->id=$id;
		$this->name=$name;
		$this->stadium=$stadium;
		$this->timee=$timee;
		$this->price=$price;
		$this->image=$image;
	}

	function getId(){
		return $this->id;
	}
	function getName(){
		return $this->name;
	}
	function getStadium(){
		return $this->stadium;
	}
	function getTimee(){
		return $this->timee;
	}
	function getPrice(){
		return $this->price;
	}
	function getImage(){
		return $this->image;
	}
}






?>