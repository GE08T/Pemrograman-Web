<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
  <style>
    table {
      padding-block: 50px;
      color: wheat;
      font-family: monospace;
    }
    tr, th,td {
      border: 1px solid dakslategrey;
      border-radius: 3px;
    }
    th, td {
      text-align: left;
      background-color: darkslategrey;
      padding-inline: 10px;
    }
  </style>
</head>
<body>
  <?php
    $Dosen = [
      'nama' => 'Elok Nur Hamdana',
      'domisili' => 'Malang',
      'jenis_kelamin' => 'Perempuan'];

    echo "Nama : {$Dosen['nama']} <br>";
    echo "Domisili : {$Dosen['domisili']} <br>";
    echo "Jenis Kelamin : {$Dosen['jenis_kelamin']} <br>";
  ?>
  <table>
    <tr>
      <th>Nama </th>
      <td><?= $Dosen['nama'] ?></td>
    </tr>
    <tr>
      <th>Domisili </th>
      <td><?= $Dosen['domisili'] ?></td>
    </tr>
    <tr>
      <th>Jenis Kelamin </th>
      <td><?= $Dosen['jenis_kelamin'] ?></td>
    </tr>
  </table>
</body>
</html>