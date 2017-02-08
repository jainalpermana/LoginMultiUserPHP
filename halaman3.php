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
	<title>HALAMAN 3</title>
</head>
<body>

<h1> SELAMAT DATANG <?php echo $_SESSION['userid']; ?> </h1>
<br>
<a href="log.php?op=out">LOG OUT</a>

</body>
</html>