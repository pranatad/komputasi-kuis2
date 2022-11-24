<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/4.png" >
<?php
$kode_keuangan = $_GET['kode_keuangan'];
include "../koneksi2.php";
$sql = "select * from laporan_keuangan where kode_keuangan = '$kode_keuangan' ";
$hasil = mysqli_query($kon,$sql);
if (!$hasil) die ('Gagal Query...');

$data = mysqli_fetch_array($hasil);
$periode= $data['periode'];
$tgl_laporan= $data['tgl_laporan'];
$total= $data['total'];

echo "<h2>Konfirmasi Hapus</h2>" ;
echo "Periode : ".$periode."<br/>";
echo "Tgl laporan: ".$tgl_laporan."<br/>";
echo "Total: ".$total."<br/>";
echo "APAKAH DATA INI AKAN DI HAPUS? <br/>";
echo "<a href='laporan_hapus.php?kode_keuangan=$kode_keuangan&hapus=1'> YA </a>";
echo "&nbsp;&nbsp;";
echo "<a href='laporan_tampil.php'> TIDAK </a> <br/><br/>";

if(isset($_GET['hapus'])){
	$sql = "delete from laporan_keuangan where kode_keuangan = '$kode_keuangan'";
	$hasil = mysqli_query($kon,$sql);
	if(!$hasil){
		echo "Gagal Hapus  data Barang : $nama_brg .. <br/> ";
		echo " <a href='laporan_tampil.php'>Kembali Ke Laporan</a>";
	}else{
		header('location:laporan_tampil.php');
	}
}
?>
</body>
</html>
