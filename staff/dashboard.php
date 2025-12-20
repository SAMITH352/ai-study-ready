<?php
session_start();
echo "<h2>Staff Dashboard</h2>";
echo "<a href='upload_students.php'>Upload Students</a> | ";
echo "<a href='upload_video.php'>Upload Video</a> | ";
echo "<a href='view_results.php'>View Results</a> | ";
echo "<a href='../auth/logout.php'>Logout</a>";
?>