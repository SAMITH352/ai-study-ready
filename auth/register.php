<?php
include('../config/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $role = $_POST['role'];
  $conn->query("INSERT INTO users (name, email, password, role) VALUES ('$name','$email','$password','$role')");
  echo "Registered successfully. <a href='login.php'>Login</a>";
  exit;
}
?>
<form method='post'>
  <h3>Register</h3>
  Name:<input name='name'><br>
  Email:<input name='email'><br>
  Password:<input type='password' name='password'><br>
  Role:<select name='role'><option value='student'>Student</option><option value='staff'>Staff</option></select><br>
  <button>Register</button>
</form>