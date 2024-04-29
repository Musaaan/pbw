<?php
require_once("koneksi.php");
if(isset($_GET['kategori'])){
    $kategori = $_GET['kategori'];

    $sql = "SELECT b.judul, b.isi FROM berita b INNER JOIN kategori k ON b.id_kategori = k.id WHERE k.nama = '$kategori'";

    $result = mysqli_query($conn,$sql);

    if(!$result){
        die("Error : " . mysqli_error($conn));
    }else{
        echo "<h1 style='font-size:70px;'>Berita $kategori</h1>";
        if(mysqli_num_rows($result) > 0){
            while($data = mysqli_fetch_assoc($result)){
                $judul = $data['judul'];
                $isi = $data['isi'];

                echo <<<_END
                 <h1>$judul</h1>
                 <p>$isi</p>
                 <hr/>
                 <br/>
                _END;
            }
        }else{
            echo "<p>Berita Kosong!</p>";
        }
    }
}

?>