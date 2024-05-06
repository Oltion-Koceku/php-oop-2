<?php

require_once __DIR__ . '/Articoli.php';


class Cuccia extends Articoli {
  public $material;
  public $size;

  public function __construct(string $_name, string $_descrption, float $_price,Categoria $_category, string $_img, string $_material,int $_size  ){
    
    $this-> material = $_material;
    $this-> size = $_size;

    parent::__construct( $_name, $_descrption, $_price, $_category, $_img);

  }

  public function getMaterial(){
    return $this->material;
  }
}