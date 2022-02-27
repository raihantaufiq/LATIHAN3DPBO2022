<?php

class Processor{

    private $name;
    private $price;

    //konstruktor
    function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    //set
    public function setName($name){
        $this->name = $name;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    //get
    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    //destruktor
    function __destruct(){
    }

}


?>