<!DOCTYPE html>
<html>
<head>
  <title>Form Aman Injeksi</title>
</head>
<body>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $input = $_POST['input'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email = "Email sudah valid";
    } else {
      $email = "Email tidak valid";
    }    
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    echo 
    "<ul>
      <li>$input</li>
      <li>$email</li>
    </ul>";
  }
  ?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email"><br><br>
    <label for="input">Deksripsi:</label><br>
    <textarea name="input" id="input"></textarea><br><br>
    
    <input type="submit" value="submit" name="submit">
  </form>
</body>
</html>