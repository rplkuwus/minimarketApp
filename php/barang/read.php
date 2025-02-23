<?php
include "../../config/db.php";

$result = $conn->query("SELECT * FROM barang ORDER BY id_barang DESC");

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
