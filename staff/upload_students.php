<?php
echo "<h3>Upload Student CSV</h3>";
?>
<form method='post' enctype='multipart/form-data'>
  <input type='file' name='file'>
  <button>Upload</button>
</form>
<?php
if ($_FILES) {
  move_uploaded_file($_FILES['file']['tmp_name'], "../uploads/students/" . $_FILES['file']['name']);
  echo "Uploaded successfully!";
}
?>