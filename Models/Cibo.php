<?php

class Cibo extends Articoli {
  public $ingredient;

  public function __construct(string $_name, string $_descrption, string $_price, $_category, array $_ingredient){
    
    $this->ingredient = $_ingredient;

    parent::__construct($_name, $_descrption, $_price, $_category);

  }


  public function getIngredient(){
    return implode(', ', $this->ingredient);
  }
}
