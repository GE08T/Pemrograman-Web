<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Data Mahasiswa</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    h2 {
      margin-bottom: 50px;
    }

    .box {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      padding: 5px;
      margin-right: 20px;
      margin-left: 20px;
    }

    #drop {
      font-size: 1.5em;
      text-align: center;
      width: 90vw;
      padding-block: 5px;
      padding-inline: 15px;
      background-color: darkslategray;
      color: wheat;
      border-radius: 5px 5px 0 0;
      border: 2px solid black;
    }

    #box-table {
      background-color: darkslategray;
      color: wheat;
      width: 90vw;
      border-radius:  0 0 5px 5px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding-block: 40px;
    }
    .table {
      border-collapse: collapse;
      width: 90%;
    }
    th, td {
      border: 2px solid wheat;
      padding: 5px;
    }
    th {
      background: wheat;
      color: darkslategray; 
    }
  </style>
</head>
<body>
  <div class="box">
    <h2>Data Mahasiswa</h2>
    <button id="drop">Click to show Database</button>
    <div id="box-table">
      <table class="table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $mahasiswas = array(
              array("Andi", 19, "2f", "Malang"),
              array("Budi", 30, "2a", "Batu"),
              array("Siti", 28, "2c", "Dinoyo"),
              array("Anton", 25, "2d", "Lawang"),
            );
            $sum = 0; 
            $count = 0;

            foreach($mahasiswas as $mahasiswa) {
              echo "<tr>";
                echo "<td>" . $mahasiswa[0] . "</td>";
                echo "<td>" . $mahasiswa[1] . "</td>";
                echo "<td>" . $mahasiswa[2] . "</td>";
                echo "<td>" . $mahasiswa[3] . "</td>";
              echo "</tr>";
              $sum += $mahasiswa[1];
              $count++;
            }

            $average = $sum / $count;
          ?>
        </tbody>
      </table>
      <br>
      <h3>Rata-rata umur mahasiswa: <?php echo $average; ?></h3>
    </div>
  </div>
</body>
<script>
  $(document).ready(function () {
    $("#drop").click(function(){
      $("#box-table").slideToggle("slow");
    });
  })
</script>
</html>