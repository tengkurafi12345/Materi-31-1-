<?php


class Database{
    
    public function __construct(){
        include '../Setting/Setting.php';
        $this->conn=new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);
        if(!$this->conn){
            echo "failed to connect";
            exit;
        } 
    }
    public function find($username,$password){
        $sql="SELECT * FROM mahasiswa WHERE username='$username' and password='$password'";
        $sql_run=$this->conn->query($sql);
        $row=mysqli_num_rows($sql_run);

        if($row>0){
            return true;
        }else{
            return false;
        }

    }
}


// const $db=new Database();
// $db->insert
?>