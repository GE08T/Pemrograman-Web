<?php
// soal 1
// $umur;

// if (isset($umur) && $umur >= 10) {
//   echo "Anda sudah dewasa";
// } else {
//   echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
// }

//soal 2
$data = array("nama" => "Jane", "usia" => 25);

if (isset($data['nama'])) {
  echo "Nama: ".$data['nama'];
} else {
  echo "Variabel 'nama' tidak ditemukan dalam array.";
}