<?php
class Tickcut{
	private $nameu;
	private $id;
	private $name;
	private $stadium;
	private $timee;
	private $price;
	private $image;
	private $bank;

	function __construct($nameu,$id,$name,$stadium,$timee,$price,$image,$bank){
		$this->nameu=$nameu;
		$this->id=$id;
		$this->name=$name;
		$this->stadium=$stadium;
		$this->timee=$timee;
		$this->price=$price;
		$this->image=$image;
		$this->bank=$bank;
	}

	function getNameu(){
		return $this->nameu;
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
	function getBank(){
		return $this->bank;
	}
}






?>