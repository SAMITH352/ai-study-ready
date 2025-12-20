<?php
session_start();
include('../config/db.php');
echo "<h2>Student Dashboard</h2>";
echo "<a href='video.php'>View Videos</a> | ";
echo "<a href='../auth/logout.php'>Logout</a>";
?>