<?php
include('../config/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $conn->query("INSERT INTO users (name,email,password,role) VALUES ('$name','$email','$password','staff')");
  echo "Staff added successfully.";
}
?>
<form method='post'>
  <h3>Add Staff</h3>
  Name:<input name='name'><br>
  Email:<input name='email'><br>
  Password:<input type='password' name='password'><br>
  <button>Add</button>
</form>