<?php
include "../../config/db.php";

if (isset($_POST['id_transaksi'])) {
    $id_transaksi = $_POST['id_transaksi'];

    $stmt = $conn->prepare("DELETE FROM transaksi WHERE id_transaksi = ?");
    $stmt->bind_param("i", $id_transaksi);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
