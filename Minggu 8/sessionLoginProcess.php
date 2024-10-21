<?php
$usernam = $_POST['username'];
$password = $_POST['password'];

if ($usernam == 'admin' && $password == '1234') {
  session_start(); 
  $_SESSION['username'] = $usernam;
  $_SESSION['status'] = 'login';
  echo "Anda berhasil login, silahkan menuju <a href='homeSession.php'>Halaman Home</a>";
} else {
  echo "Gagal login. Silahkan login lagi <a href='sessionLoginForm.html'>Login</a>";
}
?>