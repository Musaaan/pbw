<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array(
        "name" => $_POST["nama"],
        "email" => $_POST["email"],
        "address" => $_POST["alamat"],
        "product" => $_POST["produk"],
        "quantity" => $_POST["jumlah"]
    );

    if ($_POST["jumlah"] <= 0) {
        echo "Jumlah tidak boleh kurang dari 1";
        echo "<br>";
        echo "<a href='form_product.html'>kembali</a>";

    } else if (filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
        // echo("$email is a valid email address");
        $file = fopen("produk.txt", "a");
        fwrite($file, "Nama  :" . $data["name"] . "\n");
        fwrite($file, "Email  :" . $data["email"] . "\n");
        fwrite($file, "Alamat  :" . $data["address"] . "\n");
        fwrite($file, "Produk  :" . $data["product"] . "\n");
        fwrite($file, "Jumlah  :" . $data["quantity"] . "\n\n");
        fclose($file);

        echo "Pesanan Anda telah terkirim. ^<^";
      } else {
        echo("is not a valid email address");
        echo "<a href='form_product.html'>kembali</a>";
      }
}
?>
