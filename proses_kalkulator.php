<?php
if ($_SERVER["REQUEST_METHOD"]  == "POST"){
    $number1 = $_POST["angka1"];
    $number2 = $_POST["angka2"];
    $operasi = $_POST["operasi"];

    switch ($operasi) {
        case "tambah":
            $hasil = $number1 + $number2;
            break;
        case "kurang":
            $hasil = $number1 - $number2;
            break;
        case "kali":
            $hasil = $number1 * $number2;
            break;
        case "bagi":
            if ($number2 != 0) {
                $hasil = $number1 / $number2;
            }
                else {
                    $hasil = "Tidak valid atau pembagi tidak bisa bernilai 0";
                }

            break;
        default:
        $hasil = "Operasi tidak valid";
    }
    
    echo "Hasil = " . $hasil;
}
?>
