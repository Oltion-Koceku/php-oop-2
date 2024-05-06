<?php

require_once __DIR__ . '/Articoli.php';

class Giochi extends Articoli {
  public $material;

  public function __construct(string $_name, string $_descrption, float $_price,Categoria $_category, string $_img, string $_material){
    
    $this-> material = $_material;

    parent::__construct( $_name, $_descrption, $_price, $_category, $_img);

  }

  public function getMaterial(){
    return $this->material;
  }
}