<?php
session_start();

if (!isset($_SESSION['films'])) {
  $_SESSION['films'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $namaFilm = $_POST['namaFilm'];
  $genre = $_POST['genre'];
  $rating = $_POST['rating'];
  $tanggalTayang = $_POST['tanggalTayang'];

  $_SESSION['films'][] = [
    'namaFilm' => $namaFilm,
    'genre' => $genre,
    'rating' => $rating,
    'tanggalTayang' => $tanggalTayang
  ];
}

$output = '';
foreach ($_SESSION['films'] as $index => $film) {
  $output .= 
  '<tr class="text-center">
    <td class="border-2 border-zinc-900">' . ($index + 1) . '</td>
    <td class="border-2 border-zinc-900">' . htmlspecialchars($film['namaFilm']) . '</td>
    <td class="border-2 border-zinc-900">' . htmlspecialchars($film['genre']) . '</td>
    <td class="border-2 border-zinc-900">' . htmlspecialchars($film['rating']) . '</td>
    <td class="border-2 border-zinc-900">' . htmlspecialchars($film['tanggalTayang']) . '</td>
  </tr>';
}

echo $output;
session_destroy();
?>
