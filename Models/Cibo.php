<?php

require_once __DIR__ . '/Articoli.php';


class Cibo extends Articoli {
  public $ingredient;

  public function __construct(string $_name, string $_descrption, float $_price,Categoria  $_category, string $_img, array $_ingredient){
    
    $this->ingredient = $_ingredient;

    parent::__construct($_name, $_descrption, $_price, $_category, $_img);

  }


  public function getIngredient(){
    return implode(', ', $this->ingredient);
  }
}
