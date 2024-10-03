<?php

function perkenalan($nama, $salam = "Assalamualaikum") {
  echo $salam . ", ";
  echo "Perkenalkan, nama saya " . $nama . "<br>";
  echo "Senang berkenalan dengan Anda";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Andi", "Hallo");

echo "<hr>";

$saya = "Galung";
$ucapanSalam = "Selamat Pagi";

// memanggil dan mengisi parameter menggunakan variabel
perkenalan($saya);

?>
