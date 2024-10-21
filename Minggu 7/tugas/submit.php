<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Form</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    h2 {
      text-align: center;
      padding-block: 2rem;
    }
    table {
      border-collapse: collapse;
      margin: 0 auto;
    }
    th, td {
      
      padding: 20px;
    }
  </style>
</head>
<body>
  <h2>Hasil Input Form</h2>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $namaArray = $_POST['nama'];
      $umurArray = $_POST['umur'];
      $alamatArray = $_POST['alamat'];

      if (!empty($namaArray) && !empty($umurArray) && !empty($alamatArray)) {
        echo "<table border='3'>";
        echo "<tr><th>Nama</th><th>Umur</th><th>Alamat</th></tr>";

        // Loop untuk menampilkan data dalam bentuk tabel
        for ($i = 0; $i < count($namaArray); $i++) {
          echo "<tr>";
          echo "<td>" . htmlspecialchars($namaArray[$i]) . "</td>";
          echo "<td>" . htmlspecialchars($umurArray[$i]) . "</td>";
          echo "<td>" . htmlspecialchars($alamatArray[$i]) . "</td>";
          echo "</tr>";
        }

        echo "</table>";
      } else {
        echo "Tidak ada data yang di-submit.";
      }
  } else {
    echo "Form belum disubmit.";
  }
  ?>

  <br>
  <a href="generateInput.php">Kembali ke Form</a>
</body>
</html>
