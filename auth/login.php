<?php
session_start();
include('../config/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $res = $conn->query("SELECT * FROM users WHERE email='$email'");
  if ($res->num_rows > 0) {
    $user = $res->fetch_assoc();
    if (password_verify($password, $user['password'])) {
      $_SESSION['user'] = $user;
      if ($user['role'] == 'admin') header('Location: ../admin/dashboard.php');
      elseif ($user['role'] == 'staff') header('Location: ../staff/dashboard.php');
      else header('Location: ../student/dashboard.php');
      exit;
    } else echo "Wrong password.";
  } else echo "No user found.";
}
?>
<form method='post'>
  <h3>Login</h3>
  Email:<input name='email'><br>
  Password:<input type='password' name='password'><br>
  <button>Login</button>
</form>