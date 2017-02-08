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
	<title>HALAMAN 1</title>
</head>
<body>

<h1> SELAMAT DATANG <?php echo $_SESSION['userid']; ?> </h1>
<br>
<a href="log.php?op=out">LOG OUT</a>

</body>
</html>