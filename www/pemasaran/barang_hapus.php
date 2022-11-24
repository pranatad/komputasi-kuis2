<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/4.png" >
<?php
$kode_brg = $_GET['kode_brg'];
include "../koneksi2.php";
$sql = "select * from barang where kode_brg = '$kode_brg' ";
$hasil = mysqli_query($kon,$sql);
if (!$hasil) die ('Gagal Query...');

$data = mysqli_fetch_array($hasil);
$nama_brg= $data['nama_brg'];
$jenis_brg= $data['jenis_brg'];
$harga= $data['harga'];

echo "<h2>Konfirmasi Hapus</h2>" ;
echo "Nama Barang : ".$nama_brg."<br/>";
echo "Jenis Barang: ".$jenis_brg."<br/>";
echo "Harga : ".$harga."<br/>";
echo "APAKAH DATA INI AKAN DI HAPUS? <br/>";
echo "<a href='barang_hapus.php?kode_brg=$kode_brg&hapus=1'> YA </a>";
echo "&nbsp;&nbsp;";
echo "<a href='barang_tampil.php'> TIDAK </a> <br/><br/>";

if(isset($_GET['hapus'])){
	$sql = "delete from barang where kode_brg = '$kode_brg'";
	$hasil = mysqli_query($kon,$sql);
	if(!$hasil){
		echo "Gagal Hapus  data Barang : $nama_brg .. <br/> ";
		echo " <a href='barang_tampil.php'>Kembali Ke Daftar Barang</a>";
	}else{
		header('location:barang_tampil.php');
	}
}
?>
</body>
</html>
