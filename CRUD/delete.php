<?php
include 'config.php';

$id = $_GET['id'];
$sql = "DELETE FROM wisata WHERE id = ?";
$params = array($id);
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
  die(print_r(sqlsrv_errors(), true));
}

header("Location: index.php");
?>