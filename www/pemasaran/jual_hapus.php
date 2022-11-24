<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/4.png" >
<?php
$kode_jual_brg = $_GET['kode_jual_brg'];
include "../koneksi2.php";
$sql = "select * from detail_jual_barang where kode_jual_brg = '$kode_jual_brg' ";
$hasil = mysqli_query($kon,$sql);
if (!$hasil) die ('Gagal Query...');

$data = mysqli_fetch_array($hasil);
$kode_brg= $data['kode_brg'];
$qty= $data['qty'];
$id_bag_pemasaran= $data['id_bag_pemasaran'];
$id_bag_keuangan= $data['id_bag_keuangan'];
$tgl_jual= $data['tgl_jual'];

echo "<h2>Konfirmasi Hapus</h2>" ;
echo "Kode jual Barang: ".$kode_jual_brg."<br/>";
echo "Kode Barang: ".$kode_brg."<br/>";
echo "Tgl jual Barang : ".$tgl_jual."<br/>";
echo "APAKAH DATA INI AKAN DI HAPUS? <br/>";
echo "<a href='jual_hapus.php?kode_per_brg=$kode_jual_brg&hapus=1'> YA </a>";
echo "&nbsp;&nbsp;";
echo "<a href='jual_tampil.php'> TIDAK </a> <br/><br/>";

if(isset($_GET['hapus'])){
	$sql = "delete from detail_jual_barang where kode_jual_brg = '$kode_jual_brg'";
	$hasil = mysqli_query($kon,$sql);
	if(!$hasil){
		echo "Gagal Hapus  data Film : $kode_jual_brg .. <br/> ";
		echo " <a href='jual_tampil.php'>Kembali Ke Daftar jual Barang</a>";
	}else{
		header('location:jual_tampil.php');
	}
}
?>
</body>
</html>
