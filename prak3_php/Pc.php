<?php

include "Processor.php";
include "Disk.php";
include "Ram.php";

class Pc{
    
    private $processor;
    private $disk;
    private $ram;
    private $totalPrice;

    //konstruktor
    function __construct($processor, $disk, $ram){
        $this->processor = $processor;
        $this->disk = $disk;
        $this->ram = $ram;
        $this->totalPrice = $processor->getPrice() + $disk->getPrice() + $ram->getPrice();
    }


    //set
    public function setProcessor($processor){
        $this->processor = $processor;
    }

    public function setDisk($disk){
        $this->disk = $disk;
    }

    public function setRam($ram){
        $this->ram = $ram;
    }

    public function updateTotalPrice(){
        $this->totalPrice = $this->processor->getPrice() + $this->disk->getPrice() + $this->ram->getPrice();
    }

    //get
    public function getProcessor(){
        return $this->processor;
    }

    public function getDisk(){
        return $this->disk;
    }

    public function getRam(){
        return $this->ram;
    }

    public function getTotalPrice(){
        return $this->totalPrice;
    }

    //methods
    public function show(){
        echo "Processor<br/>";
        echo "- Name : ".$this->processor->getName()."<br/>";
        echo "- Price : ".$this->processor->getPrice()."<br/>";
        echo "Disk<br/>";
        echo "- Type : ".$this->disk->getType()."<br/>";
        echo "- Capacity : ".$this->disk->getCapacity()."<br/>";
        echo "- Price : ".$this->disk->getPrice()."<br/>";
        echo "Ram<br/>";
        echo "- Capacity : ".$this->ram->getCapacity()."<br/>";
        echo "- Price : ".$this->ram->getPrice()."<br/>";
        echo "totalPrice : ".$this->getTotalPrice()."<br/>";
    }


    //destruktor
    function __destruct(){
    }

}
    

?>