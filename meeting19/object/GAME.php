<?php
class Archer{
    public string $nama;
    public string $jk;
    public string $weapon;
    public string $armor;

    function __construct($Nama,$Jk,$Weapon,$Armor)
    {
        $this->nama=$Nama;
        $this->jk=$Jk;
        $this->weapon=$Weapon;
        $this->armor=$Armor;
    }

    function info(){
        echo "Character Detail Info"."<br>";
        echo "1. nama : ".$this->nama."<br>";
        echo "2. jk : ".$this->jk."<br>";
        echo "3. weapon : ".$this->weapon."<br>";
        echo "4. armor : ".$this->armor."<br>";
    }

    function statistik_1(){
        echo "Statistic Non Reincar :"."<br>"; 
        echo "Physical Atk.20000-22000"."<br>";
        echo "Physical Def.20459"."<br>";
        echo "Critical Rate 72%"."<br>";
        echo "Attack Interval 4.00/sec"."<br>";
    }
    function statistik_2(){
        echo "Statistic Reincarnation 1:"."<br>";
        echo "Physical Atk.23000-26000";
        echo "Physical Def.22459";
        echo "Critical Rate 73%";
        echo "Attack Interval 5.00/sec"."<br>";
    }
}

class Archer_1 extends Archer{
    public string $reincar1;
    function __construct($Nama,$Jk,$Weapon,$Armor,$Reincar1)
    {
        parent::__construct($Nama,$Jk,$Weapon,$Armor,$Reincar1);
        $this->reincar1=$Reincar1;
    }
    function info(){
        parent::info();
        echo "Statistic Reincarnation :".$this->reincar1."<br>";
        echo "Physical Atk.23000-26000"."<br>";
        echo "Physical Def.22459"."<br>";
        echo "Critical Rate 73%"."<br>";
        echo "Attack Interval 5.00/sec"."<br>";
    }
}

class Archer_2 extends Archer{
    public string $reincar2;
    function __construct($Nama,$Jk,$Weapon,$Armor,$Reincar2)
    {
        parent::__construct($Nama,$Jk,$Weapon,$Armor,$Reincar2);
        $this->reincar2=$Reincar2;
    }
    function info(){
        parent::info();
        echo "Statistic Reincarnation :".$this->reincar2."<br>";
        echo "Physical Atk.24000-27000"."<br>";
        echo "Physical Def.25459"."<br>";
        echo "Critical Rate 75%"."<br>";
        echo "Attack Interval 6.00/sec"."<br>";
    }
}


$Vinzz=New Archer("Vinz","Laki-laki","Demon Bow","True Dragon Slayer");
$Vinz1=New Archer_1("Vinz","Laki-laki","True Demon Hunter Bow","True Dragon Slayer","Reincarnation 1");
$Vinz2=New Archer_2("Vinz","Laki-laki","True Demon Hunter Bow","True Dragon Slayer","Reincarnation 2");

$Vinzz->info();
$Vinzz->statistik_1();
echo "<br>";
$Vinz1->info();
echo "<br>";
$Vinz2->info();
?>