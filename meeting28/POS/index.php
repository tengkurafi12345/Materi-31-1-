<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Quantity</title>
</head>
<body>
    <?php
    include 'database.php';
    $db = new database();

    // untuk menghandle agar code dapat memasuki database
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $item_no = $_POST['item_no'];
        $add_qty = (int)$_POST['add_qty'];

        // mengambil kuantitas saat ini (di database)
        $result = $db->conn->query("SELECT qty FROM item WHERE no='$item_no'");
        if ($result) {
            $row = $result->fetch_assoc();
            $current_qty = $row['qty'];

            // mengupdate qty di database
            $new_qty = $current_qty + $add_qty;
            $db->update($item_no, null, $new_qty); // hanya mengupdate qty,item null
        } else {
            echo "Failed to fetch current quantity.";
        }
    }
    ?>
    
    <form action="" method="POST">
        <table border="1">
            <tr>
                <th>No</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Add Quantity</th>
                <th>Action</th>
            </tr>
            <?php
            $no = 1;
            foreach ($db->show_data() as $d) {
                echo '<tr>';
                echo '<td>' . $no++ . '</td>';
                echo '<td>' . $d['item'] . '</td>';
                echo '<td>' . $d['qty'] . '</td>';
                echo '<td><input type="number" name="add_qty" min="1" required></td>';
                echo '<td>
                        <input type="hidden" name="item_no" value="' . $d['no'] . '">
                        <input type="submit" name="submit" value="Add Quantity">
                      </td>';
                echo '</tr>';
            }
            ?>
        </table>
    </form>
</body>
</html>
