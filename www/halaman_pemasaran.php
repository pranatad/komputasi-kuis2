<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
<body bgcolor="lightgreen" background="pict/gambar.jpg" >
	<?php 
	error_reporting(0);
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1 align="center"><font color="white">Pemasaran</h1>

	<p align="center" ><font color="white">Halo <b><?php echo $_SESSION['username']; ?></b><font color="white"> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<p align="center" ><a href="logout.php"><font color="white">LOGOUT</a></P>
<br/><p align="center" ><a href="pemasaran.php"><font color="white" font color="white" >Masuk Halaman Pemasaran</a></a></p>
</body>
</html>
