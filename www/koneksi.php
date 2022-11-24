<?php 
$koneksi = mysqli_connect("db","user","test","id9226201_multi_user");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
