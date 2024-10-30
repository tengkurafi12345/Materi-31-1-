<?php
class Pegawai{
    public string $nama;
    public string $umur;
    public string $jk;
    public string $penddidikan;
    public string $NIP;

    function __construct($Nama,$umur,$Jk,$Pendidikan,$NIP)
    {
        $this->nama=$Nama;
        $this->umur=$Umur;
        $this->jk=$Jk;
        $this->pendidikan=$Pendidikan;
        $this->NIP=$NIP;
    }

    function info(){
        echo "Pegawai Detail Info"."<br>";
        echo "1. nama:".$this->nama."<br>";
        echo "2. NIP: ".$this->NIP."<br>";
        echo "3. umur: ".$this->umur."<br>";
        echo "4. jk".$this->jk."<br>";
        echo "5. pendidikan".$this->jk."<br>";
    }
    
    function keahlian(){
        echo "menghitung dan mencatat".PHP_EOL;
    }
    
}

class Supervisor extends Pegawai{
    public string $Divisi;
    function __construct($Nama,$Umur,$Jk,$Pendidikan,$NIP,$Divisi)
    {
        parent::__construct($Nama,$Umur,$Jk,$Pendidikan,$NIP,$Divisi);
        $this->divisi=$divisi;
    }

    function info(){
        parent::info();
        echo "6.divisi : ".$this->divisi."<br>";
    }

}

$Tanjar=new Pegawai("MadTanjar","44","laki-laki","SMA","101918",);
$Budi=new Supervisor("budi prabaswara","45","laki-laki","magister","101010","maintenance");
$Tanjar->info();
echo "<br>";
$Budi->info();
?>