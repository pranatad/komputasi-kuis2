<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/4.png" >
<?php
$kode_per_brg = $_GET['kode_per_brg'];
include "../koneksi2.php";
$sql = "select * from permintaan_barang where kode_per_brg = '$kode_per_brg' ";
$hasil = mysqli_query($kon,$sql);
if (!$hasil) die ('Gagal Query...');

$data = mysqli_fetch_array($hasil);
$kode_brg= $data['kode_brg'];
$id_bag_pemasaran= $data['id_bag_pemasaran'];
$id_bag_gudang= $data['id_bag_gudang'];
$qty= $data['qty'];
$tgl_per_brg= $data['tgl_per_brg'];

echo "<h2>Konfirmasi Hapus</h2>" ;
echo "Kode Per Barang: ".$kode_per_brg."<br/>";
echo "Kode Barang: ".$kode_brg."<br/>";
echo "Tgl Per Barang : ".$tgl_per_brg."<br/>";
echo "APAKAH DATA INI AKAN DI HAPUS? <br/>";
echo "<a href='minta_hapus.php?kode_per_brg=$kode_per_brg&hapus=1'> YA </a>";
echo "&nbsp;&nbsp;";
echo "<a href='minta_tampil.php'> TIDAK </a> <br/><br/>";

if(isset($_GET['hapus'])){
	$sql = "delete from permintaan_barang where kode_per_brg = '$kode_per_brg'";
	$hasil = mysqli_query($kon,$sql);
	if(!$hasil){
		echo "Gagal Hapus  data Film : $kode_per_brg .. <br/> ";
		echo " <a href='minta_tampil.php'>Kembali Ke Daftar Per Barang</a>";
	}else{
		header('location:minta_tampil.php');
	}
}
?>
</body>
</html>
