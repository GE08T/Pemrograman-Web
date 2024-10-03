<!DOCTYPE html>
<html lang="en">
<head>
  <title>Array Terindeks</title>
</head>
<body>
<?php
  $ListDosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

  echo $ListDosen[2] . "<br>";
  echo $ListDosen[0] . "<br>";
  echo $ListDosen[1] . "<br>";

  echo "<br>";
  
  foreach ($ListDosen as $dosen) {
    echo $dosen. "<br>";
  }

?>
</body>
</html>