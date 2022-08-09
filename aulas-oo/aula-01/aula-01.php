<?php

class Produto{
    //Propriedades
    public $id;
    public $imagem;
    public $nome;
    public $preco;

    // Metodos (Funções)

    function definirPreco($novoPreco){
        $this->preco = $novoPreco;
    }
    function mostrarPreco(){
        echo $this->preco;
    }
    function definirNome($novoNome){
        $this->nome = $novoNome;
    }
    function mostrarNome(){
        echo $this->nome;
    }
}
$prod = new Produto();
$prod2 = new Produto();

$prod->definirPreco(10);
$prod2->definirPreco(20);


$prod->definirNome("Sansung_S");
$prod2->definirNome("SHARP_E");

echo "Valor = ";
$prod->mostrarPreco();

echo "<br>nome = ";
$prod->mostrarNome();

echo "<br>------------------<br>";


echo "Valor = ";
$prod2->mostrarPreco();

echo "<br>nome = ";
$prod2->mostrarNome();



?>