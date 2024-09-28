<?php

function tampilkanHaloDunia(int $jumlah, int $indeks = 1) {
  echo "Perulangan ke-{$indeks} <br>";

  if ($indeks < $jumlah) {
    tampilkanHaloDunia($jumlah, $indeks+1);
  }
}

tampilkanHaloDunia(20);