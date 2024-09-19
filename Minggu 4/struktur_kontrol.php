<?php

$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
  echo "Nilai A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
  echo "Nilai B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
  echo "Nilai C";
} elseif ($nilaiNumerik < 70) {
  echo "Nilai D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
  $jarakSaatIni += $peningkatanHarian;
  $hari++;
}

echo "<br>";
echo "<br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak $jarakTarget kilometer.";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i < $jumlahLahan; $i++) { 
  $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br>";
echo "<br>";
echo "Jumlah buah yang akan dipanen adalah : {$jumlahBuah}";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor) {
  $totalSkor += $skor;
}

echo "<br>";
echo "<br>";
echo "Total skor ujian adalah : {$totalSkor}";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

echo "<br>";
echo "<br>";
foreach ($nilaiSiswa as $nilai) {
  if ($nilai < 60) {
    echo "Nilai: {$nilai} (Tidak Lulus) <br>";
    continue;
  } 
  echo "Nilai: {$nilai} (Lulus) <br>";
} 

$nilaiMTK = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

echo "<br>";
echo "<br>";
echo "Nilai MTK yang diberikan : ";
foreach($nilaiMTK as $nilai) {
  echo "$nilai, ";
}
echo "<br>";

for ($i = 0; $i < sizeof($nilaiMTK) - 1; $i++) {
  for ($j = 0; $j < sizeof($nilaiMTK) - $i -1; $j++) {
    if ($nilaiMTK[$j] > $nilaiMTK[$j+1]) {
      $temp = $nilaiMTK[$j];
      $nilaiMTK[$j] = $nilaiMTK[$j+1];
      $nilaiMTK[$j+1] = $temp;
    }
  }
}

$nilaiMTK = array_slice($nilaiMTK, 1, -2);

echo "Nilai MTK Setelah dihilangkan 2 terbesar dan 2 terkecil : ";
foreach ($nilaiMTK as $nilai) {
  echo "$nilai, ";
}

$rataRata = array_sum($nilaiMTK) / count($nilaiMTK);
echo "<br>";
echo "Nilai rata - rata = {$rataRata}";

$hargaProduk = 120000;
$hargaDiskon = $hargaProduk * 0.20;
$hargaTotal = $hargaProduk - $hargaDiskon;

echo "<br>";
echo "<br>";
echo "Harga Total = {$hargaTotal}";

echo "<br>";
echo "<br>";
$poin = 510;

echo "Total skor pemain adalah {$poin} poin";
echo "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan ? ". $poin > 500 ? "YA" : "TIDAK";
?>