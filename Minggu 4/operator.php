<?php 
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;  
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Pertambahan {$a} dan {$b} = {$hasilTambah} <br>";
echo "Hasil Pengurangan {$a} dan {$b} = {$hasilKurang} <br>";
echo "Hasil Perkalian {$a} dan {$b} = {$hasilKali} <br>";
echo "Hasil Pembahan {$a} dan {$b} = {$hasilBagi} <br>";
echo "Hasil Sisa Bagi {$a} dan {$b} = {$sisaBagi} <br>";
echo "Hasil Pangkat {$a} dan {$b} = {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "Hasil {$a} sama dengan {$b} = " . (int)$hasilSama . " <br>";
echo "Hasil {$a} tidak sama dengan {$b} = " . (int)$hasilTidakSama ." <br>";
echo "Hasil {$a} lebih kecil dari {$b} = " . (int)$hasilLebihKecil . " <br>";
echo "Hasil {$a} lebih besar dari {$b} = " . (int)$hasilLebihBesar . " <br>";
echo "Hasil {$a} lebih kecil sama dengan {$b} = " . (int)$hasilLebihKecilSama . " <br>";
echo "Hasil {$a} lebih besar sama dengan {$b} = " . (int)$hasilLebihBesarSama . " <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";
echo "Hasil {$a} AND {$b} = " . (int)$hasilAnd . " <br>";
echo "Hasil {$a} OR {$b} = " . (int)$hasilOr . " <br>";
echo "Hasil NOT {$a} = " . (int)$hasilNotA . " <br>";
echo "Hasil NOT {$b} = " . (int)$hasilNotB . " <br>";

echo "<br>";
var_dump($a += $b);
echo "<br>";
var_dump($a -= $b);
echo "<br>";
var_dump($a *= $b);
echo "<br>";
var_dump($a /= $b);
echo "<br>";
var_dump($a %= $b);
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br>";
echo "Hasil {$a} identik dengan {$b} = " . (int)$hasilIdentik . " <br>";
echo "Hasil {$a} tidak identik dengan {$b} = " . (int)$hasilTidakIdentik . " <br>";

$banyakKursi = 45;
$kursiDiambil = 28;

echo "<br>";
echo "Total persentase kursi yang diambil = " . $kursiDiambil / $banyakKursi * 100 . "%";

?>
