<?php

class Giochi extends Articoli {
  public $material;

  public function __construct(string $_name, string $_descrption, string $_price, $_category, string $_material){
    
    $this-> material = $_material;

    parent::__construct( $_name, $_descrption, $_price, $_category);

  }
}