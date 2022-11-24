<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/4.png" >
<?php
$id_faktur= $_GET['id_faktur'];
include "../koneksi2.php";
$sql = "select * from faktur_pembelian where id_faktur = '$id_faktur' ";
$hasil = mysqli_query($kon,$sql);
if (!$hasil) die ('Gagal Query...');

$data = mysqli_fetch_array($hasil);
$tgl_faktur= $data['tgl_faktur'];
$id_bag_keuangan= $data['id_bag_keuangan'];
$id_bag_pembelian= $data['id_bag_pembelian'];

echo "<h2>Konfirmasi Hapus</h2>" ;
echo "tgl_faktur : ".$tgl_faktur."<br/>";
echo "id_bag_keuangan: ".$id_bag_keuangan."<br/>";
echo "id_bag_pembelian : ".$id_bag_pembelian."<br/>";
echo "APAKAH DATA INI AKAN DI HAPUS? <br/>";
echo "<a href='faktur_hapus.php?id_faktur=$id_faktur&hapus=1'> YA </a>";
echo "&nbsp;&nbsp;";
echo "<a href='faktur_tampil.php'> TIDAK </a> <br/><br/>";

if(isset($_GET['hapus'])){
	$sql = "delete from faktur_pembelian where id_faktur = '$id_faktur'";
	$hasil = mysqli_query($kon,$sql);
	if(!$hasil){
		echo "Gagal Hapus  data detail barang : $id_faktur .. <br/> ";
		echo " <a href='faktur_tampil.php'>Kembali Ke Daftar Faktur</a>";
	}else{
		header('location:faktur_tampil.php');
	}
}
?>
</body>
</html>
