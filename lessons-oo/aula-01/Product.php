<?php
class Product{
    //Property
    public $id;
    public $image;
    public $name;
    public $price;
    
    //Method Construct
    function __construct($id, $image, $name, $price){
        $this->id = $id;
        $this->image = $image;
        $this->name = $name;
        // $this->setNome(nome)
        $this->price = $price;
    }

    // Method (Function)
    function setPrice($newPrice){
        $this->price = $newPrice;
    }
    function getPrice(){
        echo $this->price;
    }
    function setName($newName){
        $this->name = $newName;
    }
    function getName(){
        echo $this->name;
    }  
}

?>