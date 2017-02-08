<?php
session_start();

//cek user login
if (!isset($_SESSION['userid'])) {
	header("location:index.php");
	
}

//cekleveladmin
if ($_SESSION['level'] != "admin" && $_SESSION['level'] != "user") {
	die("ANDA BUKAN admin dan user");
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN 2</title>
</head>
<body>

<h1> SELAMAT DATANG <?php echo $_SESSION['userid']; ?> </h1>
<br>
<a href="log.php?op=out">LOG OUT</a>

</body>
</html>