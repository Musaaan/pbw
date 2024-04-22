<?php
if ($_SERVER["REQUEST_METHOD"]  == "POST"){
    $data = array (
    "name" => $_POST["nama"],
    "email" => $_POST["email"],
    "subject" => $_POST["subjek"],
    "message" => $_POST["pesan"]

    );

$file = fopen ("kontak.txt", "a");
    fwrite($file,"Nama  :".     $data["name"]. "\n");
    fwrite($file,"Email  :".     $data["email"]. "\n");
    fwrite($file,"Subjek  :".     $data["subject"]. "\n");
    fwrite($file,"Pesan  :".     $data["message"]. "\n\n");
    fclose ($file);

    echo "Pesan Anda telah terkirim. ^<^";
}
?>

