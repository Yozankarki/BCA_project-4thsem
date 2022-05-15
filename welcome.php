<?php 
session_start();
if (!isset($_SESSION['email'])) {
	header('location:index.php?msg=1');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h2>Dashboard</h2>
<p>Welcome <?php echo $_SESSION['email'] ?></p>
<a href="logout.php">Logout</a>
</body>
</html>
