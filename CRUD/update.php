<?php 
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM wisata WHERE id = ?";
$param = array($id);
$exec = sqlsrv_query($conn, $sql, $param);
$old = sqlsrv_fetch_array($exec, SQLSRV_FETCH_ASSOC);


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $tempat = $_POST['tempatWisata'];
  $detail = $_POST['detailTempatWisata'];
  $status = $_POST['statusKunjung'];

  $sql = "UPDATE wisata SET namatempat = ?, detailtempat = ?, statuskunjung = ? WHERE id = ?";
  $param = array($tempat, $detail, $status, $id);
  $exec = sqlsrv_query($conn, $sql, $param);

  if ($exec === false) {
    die(print_r(sqlsrv_errors(), true));
  }

  header("Location: index.php");
}
?>
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
<div class="d-flex flex-column justify-content-center align-items-center m-5">
  <div class="card text-dark bg-light w-75">
    <div class="card-body">
      <h5 class="card-title text-center">Form Wisata</h5>
      <form action="" method="post" class="row g-3">
        <div class="col-lg-12">
          <label for="tempatWisata" class="form-label">Tempat Wisata</label>
          <input type="text" class="form-control" name="tempatWisata" placeholder="Gunung Kelud" value="<?= $old['namatempat'] ?>">
        </div>
        <div class="col-lg-12">
          <label for="detailTempatWisata" class="form-label">Detail Tempat Wisata</label>
          <textarea class="form-control" name="detailTempatWisata" rows="3"><?= $old['detailtempat'] ?></textarea>
        </div>
        <div class="col-lg-12">
          <label for="statusTempatWisata" class="form-label">Status Tempat Wisata</label>
          <select class="form-select" name="statusKunjung" aria-label="statusTempatWisata">
            <option value="">Pilih</option>
            <option value="Dikunjungi">Dikunjungi</option>
            <option value="Belum Dikunjungi">Belum Dikunjungi</option>
          </select>
        </div>
        <div class="mt-4 col-lg-12">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>