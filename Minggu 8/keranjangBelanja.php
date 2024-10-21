<html>
  <head>
  </head>
  <body>
    <h2> Keranjang Belanja</h2>

    <?php
      $beliBuku = $_COOKIE["beliBuku"];
      $beliNovel = $_COOKIE["beliNovel"];

      echo "Jumlah Novel: $beliBuku<br>";
      echo "Jumlah Buku: $beliNovel<br>"; 
    ?>
  </body>
</html>