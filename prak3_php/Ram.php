<?php

class Ram{

    private $capacity;
    private $price;

    //konstruktor
    function __construct($capacity, $price){
        $this->capacity = $capacity;
        $this->price = $price;
    }

    //set
    public function setCapacity($capacity){
        $this->capacity = $capacity;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    //get
    public function getCapacity(){
        return $this->capacity;
    }

    public function getPrice(){
        return $this->price;
    }

    //destruktor
    function __destruct(){
    }

}


?>