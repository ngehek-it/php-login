<?php
session_start();
try {
  $host = "localhost";
  $dbname = "post5";
  $dbUsername = "root";
  $dbPassword = "toor";
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
} catch (PDOException $e) {
  echo $e->getMessage();
}

if (!empty($_POST['username']) && !empty($_POST['password'])) {
  $password = md5($_POST['password']);
  $username = $_POST['username'];

  $login = $conn->prepare("SELECT * FROM user where username=:username AND password=:password");
  $login->execute([
    ':username' => $username,
    ':password' => $password
  ]);
  $result = $login->fetch();

  if ($result) {
    $_SESSION['auth'] = $result;
    header('Location: dashboard.php');
  }else {
    $_SESSION['error'] = 'Username / Password salah';
    header('Location: index.php');
  }
} else {
  echo "Harap Isi Username Password";
}


 ?>
