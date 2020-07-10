<?php
session_start();

if (!empty($_POST['username']) && !empty($_POST['password'])) {
  $conn = mysqli_connect("localhost","root","toor","post5");
  $uname=$_POST['username'];
  $passwrd=md5($_POST['password']);
  $query="select * from user where username='$uname' and password='$passwrd' limit 0,1";
  $result=mysqli_query($conn, $query);
  $rows = mysqli_fetch_array($result);
  if ($rows) {
    $_SESSION['auth'] = $rows;
    header('Location: dashboard.php');
  }
  else {
    $_SESSION['error'] = 'Username / Password salah';
    header('Location: index.php');
  }
} else {
  $_SESSION['error'] = 'Username / Password Tidak Boleh Kosong';
  header('Location: index.php');
}

 ?>
