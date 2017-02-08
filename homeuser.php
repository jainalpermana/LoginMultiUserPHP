<?php
session_start();

//cek user login
if (!isset($_SESSION['userid'])) {
	header("location:index.php");
	
}

//cekleveladmin
if ($_SESSION['level'] != "user") {
	die("ANDA BUKAN USER");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Anda</title>
</head>
<body>

<?php echo $_SESSION['userid']; ?>


<a href="halaman2.php">HALAMAN 1</sa>
<a href="halaman3.php">HALAMAN 2</sa>
<a href="log.php?op=out">LOG OUT</a>


</body>
</html>