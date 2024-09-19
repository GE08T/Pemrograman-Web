<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach($nilaiSiswa as $nilai) {
  if($nilai >= 70) {
    $nilaiLulus[] = $nilai;
  }
}

echo "Daftar nilai siswa yang lulus: " . implode(", ", $nilaiLulus);


$daftarKaryawan = [
  ['Alice', 7],
  ['Bob', 3],
  ['Charlie', 9],
  ['David', 5],
  ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach($daftarKaryawan as $karyawan) {
  if ($karyawan[1] > 5) {
    $karyawanPengalamanTahun[] = $karyawan[0];
  }
}

echo "<br>";
echo "<br>";
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(", ", $karyawanPengalamanTahun);

$daftarNilai = [
  "Matematika" => [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78]
  ],
  "Fisika" => [
    ['Alice', 90],
    ['Bob', 88],
    ['Charlie', 75]
  ], 
  "Kimia" => [
    ['Alice', 92],
    ['Bob', 80],
    ['Charlie', 85]
  ]
];

$mataKuliah = "Fisika";

echo "<br>";
echo "<br>";
echo "Daftar nilai mahasiswa dalam mata kuliah {$mataKuliah}: <br>";

foreach($daftarNilai[$mataKuliah] as $nilai) {
  echo "Nama {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

$daftarSiswa = [
  ['Alice', 85],
  ['Bob', 92],
  ['Charlie', 78],
  ['David', 64],
  ['Eva', 90],
];

$rataRata = 0;

foreach($daftarSiswa as $siswa) {
  $rataRata += $siswa[1];
}

$rataRata = $rataRata / count($daftarSiswa);

echo "<br>";
echo "<br>";
foreach ($daftarSiswa as $siswa) {
  echo "Nama {$siswa[0]}, Nilai: {$siswa[1]} <br>";
}
echo "Nilai Rata - Rata : {$rataRata} <br>";
echo "Dafta siswa yang Nilai nya diatas rata - rata : ";
foreach($daftarSiswa as $siswa) {
  if($siswa[1] > $rataRata) {
    echo "$siswa[0] nilainya {$siswa[1]}, ";
  } 
}