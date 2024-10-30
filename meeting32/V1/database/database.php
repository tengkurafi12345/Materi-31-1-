<?php
class Database{
    var $conn;
    public function __construct(){
        include "../settings/settings.php";
        $this->conn=new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);
        if(!$this->conn){
            echo "Failed to connect";
            exit;
        }
    }
}


?>