<?php 
require_once __DIR__ . '/Categoria.php';
class Articoli {

  private $name;
  public $description;
  public $category;
  private $price;
  public $img;

  public function __construct(string $_name, string $_descrption, float $_price, Categoria $_category, string $_img){
    
    $this->setName($_name);
    $this->description = $_descrption;
    $this->category = $_category;
    $this->setPrice($_price);
    $this->img = $_img;

  }


  // setter
  
  public function setName($_name){
    if(empty($_name) || strlen($_name) < 3){
      throw new Exception('Il nome deve avere almeno 3 caratteri');
    }
    $this->name = $_name;
  }

  public function setPrice($_price){
    if (!is_numeric($_price)) {
      throw new Exception("Inserisci un numero per il prezzo");
    }
    $this->price = $_price;
  }

  // GEtter

  public function getName(){
    return $this->name;
  }

  public function getPrice(){
    echo "&euro; $this->price";
  }

}
