<?php 

class Porosia{
      private $nameu;
      private $id;
      private $name;
      private $size;
      private $price;
      private $image;
      private $street;
      private $bank;



      function __construct($nameu,$id,$name,$size,$price,$image,$street,$bank){
          $this->nameu=$nameu;
          $this->id = $id;
          $this->name = $name;
          $this->size = $size;
          $this->price = $price;
          $this->image=$image;
          $this->street=$street;
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
    function getSize(){
        return $this->size;
    }
    function getPrice(){
        return $this->price;
    }
     function getImage(){
        return $this->image;
    }
    function getStreet(){
      return $this->street;
    }
    function getBank(){
      return $this->bank;
    }
}

?>