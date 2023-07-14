<?php 

include_once __DIR__ . '/scarpa.php' ;

class Indumento extends Scarpa {
    public $materiale;
    public static $staticProperty = 'VERSION 1.0';

    function __construct(String $_materiale){
        parent::__construct($_label);
        $this->materiale = $_materiale;
      
    }

 
}

















?>