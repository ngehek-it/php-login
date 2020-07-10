<?php
session_start();
try {
  $host = "localhost";
  $dbname = "post5";
  $username = "root";
  $password = "toor";
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
  echo $e->getMessage();
}

if (!empty($_POST['username']) && !empty($_POST['password'])) {
  $password = md5($_POST['password']);
  $login = $conn->query("SELECT * FROM user where username='".$_POST['username']."' AND password='".$password."'");
  $login = $login->fetch();
  if ($login) {
    $_SESSION['auth'] = $login;
    header('Location: dashboard.php');
  }else {
    $_SESSION['error'] = 'Username / Password salah';
    header('Location: index.php');
  }
} else {
  echo "Harap Isi Username Password";
}


 ?>
