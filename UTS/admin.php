<!DOCTYPE html>   
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
  <title>Dashboard admin</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <?php include("navAdmin.php") ?>

  <h1 class="m-20 text-5xl font-bold">Selamat Datang, <?php session_start(); echo $_SESSION['username']; ?></h1>

</body>
</html>