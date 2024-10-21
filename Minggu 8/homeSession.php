<html>
  <head>
    <title>Halaman Home</title>
  </head>
  <br>
    <?php
      session_start();
      if($_SESSION['status'] == "login") {
        echo "Selamat Datang ". $_SESSION['username'];
    ?>
    <br><a href="sessionLogout.php">Logout</a>
    <?php
      } else {
        echo "Anda belum login, silahkan";
    ?>
    <a href="sessionLoginForm.html">Login</a>
    <?php
      }
    ?>
  </br>
</html>