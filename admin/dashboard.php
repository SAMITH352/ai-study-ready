<?php
session_start();
include('../config/db.php');
echo "<h2>Admin Dashboard</h2><a href='../auth/logout.php'>Logout</a><br>";
echo "<a href='add_staff.php'>Add Staff</a>";
?>