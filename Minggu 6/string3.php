<?php

$pesan = "Saya arek Malang";
// ubah variabel $pesan menjadi arrray dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
// ubah setiap kata dari array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
// gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";