<?php

class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "kasir";
    var $conn;

    function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function show_data() {
        $arr = []; 
        $getData = "SELECT * FROM item";
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

    function update($no, $item = null, $qty) {
        if ($item === null) {
            // Update only quantity
            $updateData = "UPDATE item SET qty=? WHERE no=?";
            if ($stmt = $this->conn->prepare($updateData)) {
                $stmt->bind_param("ii", $qty, $no);
                $stmt->execute();
                if ($stmt->affected_rows > 0) {
                    echo "";
                } else {
                    echo "No rows affected.";
                }
                $stmt->close();
            } else {
                echo "Failed to prepare the statement: " . $this->conn->error;
            }
        } else {
            // Update item and quantity
            $updateData = "UPDATE item SET item=?, qty=? WHERE no=?";
            if ($stmt = $this->conn->prepare($updateData)) {
                $stmt->bind_param("sii", $item, $qty, $no);
                $stmt->execute();
                if ($stmt->affected_rows > 0) {
                    echo "Item and quantity updated successfully.";
                } else {
                    echo "No rows affected.";
                }
                $stmt->close();
            } else {
                echo "Failed to prepare the statement: " . $this->conn->error;
            }
        }
    }

    function invoice($no, $qtyRequested) {
        // Ambil data item berdasarkan nomor
        $getData = "SELECT * FROM item WHERE no=?";
        if ($stmt = $this->conn->prepare($getData)) {
            $stmt->bind_param("i", $no);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $item = $result->fetch_assoc();
                $itemPrice = $item['price'];
                $itemQty = $item['qty'];
                
                // Periksa apakah kuantitas yang diminta tersedia
                if ($itemQty >= $qtyRequested) {
                    $totalPrice = $itemPrice * $qtyRequested;
                    echo "Harga x Qty = " . number_format($totalPrice, 2) . " RP";
                } else {
                    echo "Aqua tidak cukup";
                }
            } else {
                echo "Item tidak ditemukan";
            }
            $stmt->close();
        } else {
            echo "Failed to prepare the statement: " . $this->conn->error;
        }
    }
}
?>
