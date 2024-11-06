<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Tempat Wisata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="d-flex flex-column justify-content-center m-5">
    <div class="card p-4">
    <table class="table border border-dark ">
      <a href='insert.php' class='btn btn-outline-success my-3' style="width: max-content;">Tambah</a>
      <thead class="table-dark">
        <td>No</td>
        <td>Tempat Wisata</td>
        <td>Detail Tempat Wisata</td>
        <td>Status Tempat Wisata</td>
        <td>Aksi</td>
      </thead>
      <tbody>
        <?php
          $no = 1;
          $sql = "SELECT * FROM Wisata";
          $stmt = sqlsrv_query($conn, $sql);
          while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
          echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $row['namatempat'] . "</td>";
            echo "<td>" . $row['detailtempat'] . "</td>";
            echo "<td>" . $row['statuskunjung'] . "</td>";
            echo "<td>
              <a href='update.php?id=" . $row['id'] . "' class='btn btn-outline-info mb-2'>Edit</a>
              <a href='delete.php?id=" . $row['id'] . "' class='btn btn-outline-danger'>Delete</a>
            </td>";
          echo "</tr>";
          $no++;
          } ?>
      </tbody>
    </table>
    </div>
  </div>
</body>
</html>