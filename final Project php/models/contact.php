<?php 

class Contact{
      private $id;
      private $name;
      private $coment;
      private $number;



      function __construct($id,$name,$coment,$number){
          $this->id = $id;
          $this->name = $name;
          $this->coment = $coment;
          $this->number = $number;
      }



      function getId(){
          return $this->id;
      }
      function getName(){
          return $this->name;
      }
    function getComent(){
        return $this->coment;
    }
    function getNumber(){
        return $this->number;
    }
}

?>