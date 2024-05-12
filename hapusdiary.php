<?php
require_once "koneksi.php";

$sql = "DELETE FROM diary WHERE id=" . $_GET['id'];
if (mysqli_query($conn, $sql)) {
    header ("refresh:3;url=index.php");
    echo "<p>Data berhasil disimpan.</p>";
}
else {
    echo "<p>Ups, data gagal disimpan : </p>";
}
?>