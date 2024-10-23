<?php

$user = [
  [
    "username" => "admin",
    "pasword" => "admin123",
    "role" => "admin"
  ]
];

$username = $_POST['username'];
$password = $_POST['password'];
$isAuthenticated = false;

session_start();

foreach ($user as $usr) {
  if ($usr['username'] === $username && $usr['pasword'] === $password) {
    $isAuthenticated = true;
    $_SESSION['username'] = $username;
    break;
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <?php
  if ($isAuthenticated) {
    header("Location: admin.php");
    exit();
  } else { ?>
    <div class="max-w-sm p-2 mx-auto my-5 text-xl text-center text-red-500 border rounded-lg border-zinc-900">Login gagal! Username tidak terdaftar <a href="login.html" class="text-blue-500 underline">Login Ulang</a></div>
  <?php } ?>

</body>
</html>