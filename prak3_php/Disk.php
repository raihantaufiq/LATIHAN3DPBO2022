<?php

class Disk{

    private $type;
    private $capacity;
    private $price;

    //konstruktor
    function __construct($type, $capacity, $price){
        $this->type = $type;
        $this->capacity = $capacity;
        $this->price = $price;
    }

    //set
    public function setType($type){
        $this->type = $type;
    }

    public function setCapacity($capacity){
        $this->capacity = $capacity;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    //get
    public function getType(){
        return $this->type;
    }

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