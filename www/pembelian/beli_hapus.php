<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/4.png" >
<?php
$kode_beli_brg= $_GET['kode_beli_brg'];
include "../koneksi2.php";
$sql = "select * from detail_beli_barang where kode_beli_brg = '$kode_beli_brg' ";
$hasil = mysqli_query($kon,$sql);
if (!$hasil) die ('Gagal Query...');

$data = mysqli_fetch_array($hasil);
$kode_brg= $data['kode_brg'];
$tgl_beli= $data['tgl_beli'];
$id_faktur= $data['id_faktur'];

echo "<h2>Konfirmasi Hapus</h2>" ;
echo "kode_brg : ".$kode_brg."<br/>";
echo "tgl_beli : ".$tgl_beli."<br/>";
echo "id_faktur: ".$id_faktur."<br/>";
echo "APAKAH DATA INI AKAN DI HAPUS? <br/>";
echo "<a href='beli_hapus.php?kode_beli_brg=$kode_beli_brg&hapus=1'> YA </a>";
echo "&nbsp;&nbsp;";
echo "<a href='beli_tampil.php'> TIDAK </a> <br/><br/>";

if(isset($_GET['hapus'])){
	$sql = "delete from detail_beli_barang where kode_beli_brg = '$kode_beli_brg'";
	$hasil = mysqli_query($kon,$sql);
	if(!$hasil){
		echo "Gagal Hapus  data detail beli barang : $kode_beli_brg .. <br/> ";
		echo " <a href='beli_tampil.php'>Kembali Ke Daftar Beli Barang</a>";
	}else{
		header('location:beli_tampil.php');
	}
}
?>
</body>
</html>
