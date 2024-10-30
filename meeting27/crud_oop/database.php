<?php

class Database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "santri_coding";
    var $conn;

    function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function show_data() {
        $arr = []; 
        $getData = "SELECT * FROM santri";
        $data = $this->conn->query($getData);
        if ($data) {
            while ($d = $data->fetch_assoc()) {
                $arr[] = $d;
            }
        } else {
            echo "Query failed: " . $this->conn->error;
        }
        return $arr;
    }
    

    function input($nama,$alamat,$usia){
        $insertData="INSERT INTO santri VALUES ('','$nama','$alamat','$usia')";
        $this->conn->query($insertData);
    }

    function delete($nama,$alamat,$usia){
        $deleteData="DELETE FROM santri WHERE id=$id";
    }

    function update($nama,$alamat,$usia){
        $updateData="UPDATE santri SET id='[]' nama='[$nama]',alamat='[$alamat]',usia='[$usia]' ";
    }
}



$db = new Database();

?>
