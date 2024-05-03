<?php 

class Articoli {

  public $name;
  public $description;
  public $category;
  private $price;

  public function __construct(string $_name, string $_descrption, string $_price, $_category){
    
    $this->name = $_name;
    $this->description = $_descrption;
    $this->category = $_category;
    $this->setPrice($_price);

  }


  // setter

  public function setPrice($_price){
    $this->price = $_price;
  }

  // GEtter

  public function getPrice(){
    echo "&euro; $this->price";
  }

}
