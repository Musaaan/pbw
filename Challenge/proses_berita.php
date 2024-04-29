<?php
require_once("koneksi.php");

if(!isset($_POST['judul'])){
    echo "Judul belum diisi!";
    exit();
}

if(!isset($_POST['isian'])){
    echo "Isi berita belum diisi!";
    exit();
}


$sql = "INSERT INTO berita (judul,isi,id_kategori) VALUES ('$_POST[judul]','$_POST[isian]','$_POST[kategori]')";

if(mysqli_query($conn,$sql)){
    header("refresh: 3;url=index.php");
    echo "Berhasil memambahkan berita";
}else{
    echo "Gagal menambahkan berita!";
    exit();
}
?>