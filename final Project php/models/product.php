<?php
class Product{
	private $id;
	private $name;
	private $size;
	private $price;
	private $image;

	function __construct($id,$name,$size,$price,$image){

		$this->id=$id;
		$this->name=$name;
		$this->size=$size;
		$this->price=$price;
		$this->image=$image;
	}

	function getId(){
		return $this->id;
	}
	function getName(){
		return $this->name;
	}
	function getSize(){
		return $this->size;
	}
	function getPrice(){
		return $this->price;
	}
	function getImage(){
		return $this->image;
	}
}






?>