<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/4.png" >
<?php
$kode_det_brg = $_GET['kode_det_brg'];
include "../koneksi2.php";
$sql = "select * from detail_barang where kode_det_brg = '$kode_det_brg' ";
$hasil = mysqli_query($kon,$sql);
if (!$hasil) die ('Gagal Query...');

$data = mysqli_fetch_array($hasil);
$kode_brg= $data['kode_brg'];
$stok_brg= $data['stok_brg'];
$tgl_det_brg= $data['tgl_det_brg'];

echo "<h2>Konfirmasi Hapus</h2>" ;
echo "Kode Barang : ".$kode_brg."<br/>";
echo "Stok Barang: ".$stok_brg."<br/>";
echo "Tgl Det Barang : ".$tgl_det_brg."<br/>";
echo "APAKAH DATA INI AKAN DI HAPUS? <br/>";
echo "<a href='detail_hapus.php?kode_det_brg=$kode_det_brg&hapus=1'> YA </a>";
echo "&nbsp;&nbsp;";
echo "<a href='detail_tampil.php'> TIDAK </a> <br/><br/>";

if(isset($_GET['hapus'])){
	$sql = "delete from detail_barang where kode_det_brg = '$kode_det_brg'";
	$hasil = mysqli_query($kon,$sql);
	if(!$hasil){
		echo "Gagal Hapus  data detail barang : $kode_det_brg .. <br/> ";
		echo " <a href='detail_tampil.php'>Kembali Ke Daftar Barang</a>";
	}else{
		header('location:detail_tampil.php');
	}
}
?>
</body>
</html>
