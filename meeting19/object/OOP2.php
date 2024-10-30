<?php

// class=template=cetakan 
class Character{
    // Properties (sesuatu yang boleh diakses)
    public string $name;
    public string $weapon;
    public string $armor;
    const APP_VERSION="1.0.0";

    

    function __construct(string $Nama="",string $Weapon="",string $Armor=""){
        $this->name=$Nama;
        $this->weapon=$Weapon;
        $this->armor=$Armor;
    }

    // function __destruct()
    // {
    //     echo "object sudah dihancurkan".PHP_EOL;
    // }
    

    function info(){
        echo "Hello My name is ".$this->name."<br>";
        echo "I use ".$this->weapon." and ".$this->armor." for protection <br>";
        echo "App version ".self::APP_VERSION.PHP_EOL;
    }
}

// instance pencetakan dari class menjadi object 
$AjgBgt=new Character("","","Sword","");

// $Vinzz=new Character();


$AjgBgt->info();


?>