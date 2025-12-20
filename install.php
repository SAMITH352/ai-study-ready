<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ai_study";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
$conn->select_db($dbname);

$tables = [
"users" => "CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(100), email VARCHAR(100) UNIQUE, password VARCHAR(255), role ENUM('admin','staff','student') DEFAULT 'student')",
"videos" => "CREATE TABLE IF NOT EXISTS videos (id INT AUTO_INCREMENT PRIMARY KEY, title VARCHAR(255), difficulty ENUM('easy','medium','hard'), path VARCHAR(255), uploaded_by INT)",
"results" => "CREATE TABLE IF NOT EXISTS results (id INT AUTO_INCREMENT PRIMARY KEY, student_id INT, video_id INT, score FLOAT, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)"
];

foreach($tables as $name => $sql){
  if($conn->query($sql)) echo "Table $name OK<br>"; else echo "Error in $name: ".$conn->error."<br>";
}

echo "<hr><a href='index.php'>Go to Home</a>";
?>