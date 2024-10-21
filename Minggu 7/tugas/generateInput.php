<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Generated</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      background-image: linear-gradient(to right, blueviolet, darkblue);
    }

    .container {
      display: flex;
      margin: 5em auto;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 800px;
      padding: 30px;
      border: 2px solid ghostwhite;
      max-width: 800px;
      border-radius: 20px;
      background-color: ghostwhite;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    .header {
      margin-bottom: 3rem;
    }

    .form-generate {
      display: flex;
      flex-direction: column;
      width: 700px ;
      align-items: center;
      justify-content: center;
      background-color: ghostwhite;
      margin: 10px auto;
      padding-block: 20px;
      border-radius: 15px;
    }

    .form-generate h2 {
      margin-bottom: 25px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="header">Auto Generate Form</h2>
    <form method="post" action="">
        <label for="jumlah">Jumlah Form:</label>
        <input type="number" id="jumlah" name="jumlah" min="1" required>
        <input type="submit" name="generate" value="submit">
    </form>
  </div>

  <?php
  // Mengecek apakah tombol generate ditekan
  if (isset($_POST['generate'])) {
    // Mendapatkan nilai jumlah form yang dimasukkan
    $jumlahForm = (int)$_POST['jumlah'];

    if ($jumlahForm > 0) {
      echo '<div class="form-generate">';
      echo "<h2>Form Input</h2>";
      echo '<form method="post" action="submit.php">';

      // Loop untuk men-generate form sesuai jumlah yang dimasukkan
      for ($i = 1; $i <= $jumlahForm; $i++) {
        echo '<label for="nama">Nama:</label>';
        echo "<input type='text' name='nama[]' required>";

        echo '<label for="umur">Umur:</label>';
        echo "<input type='number' name='umur[]' required>";

        echo '<label for="alamat">Alamat:</label>';
        echo "<input type='text' name='alamat[]' required><br><br>";
      }

      echo '<input type="submit" value="Submit">';
      echo '</form>';
      echo '</div>';
    } else {
      echo "Jumlah form harus lebih dari 0";
    }
  }
  ?>
</body>
</html>
