<?php
class Product{
    //Property
    public $id;
    public $image;
    public $nome;
    public $price;
    
    //Method Construct
    function __construct($id, $image, $nome, $price){
        $this->id = $id;
        $this->image = $id;
        $this->nome = $nome;
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
    function setNome($novoNome){
        $this->nome = $novoNome;
    }
    function getName(){
        echo $this->nome;
    }  
}

?>