<?php

// class=template=cetakan 
class Character{
    // Properties (sesuatu yang boleh diakses)
    public $name;
    public $weapon;
    public $armor;

    function info(){
        echo "Hello My name is ".$this->name."<br>";
        echo "I use ".$this->weapon." and ".$this->armor." for protection <br>";
    }
}

// instance pencetakan dari class menjadi object 
$AjgBgt=new Character();

$AjgBgt->name="AjgBgt Ass";
$AjgBgt->weapon="stick";
$AjgBgt->armor="none";

$AjgBgt->info()

?>