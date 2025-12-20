<?php
include('../config/db.php');
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $title = $_POST['title'];
  $difficulty = $_POST['difficulty'];
  $file = $_FILES['file']['name'];
  move_uploaded_file($_FILES['file']['tmp_name'], "../uploads/videos/" . $file);
  $path = "../uploads/videos/" . $file;
  $conn->query("INSERT INTO videos (title,difficulty,path,uploaded_by) VALUES ('$title','$difficulty','$path',1)");
  echo "Video uploaded!";
}
?>
<form method='post' enctype='multipart/form-data'>
  <h3>Upload Video</h3>
  Title:<input name='title'><br>
  Difficulty:<select name='difficulty'><option value='easy'>Easy</option><option value='medium'>Medium</option><option value='hard'>Hard</option></select><br>
  <input type='file' name='file'><br>
  <button>Upload</button>
</form>