<?php
session_start();

//cek user login
if (!isset($_SESSION['userid'])) {
	header("location:index.php");
	
}

//cekleveladmin
if ($_SESSION['level'] != "admin") {
	die("ANDA BUKAN ADMIN");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Anda</title>
</head>
<body>

<?php echo $_SESSION['userid']; ?>

<a href="halaman1.php">HALAMAN 1</a>
<a href="halaman2.php">HALAMAN 2</a>
<a href="log.php?op=out">LOG OUT</a>


</body>
</html>