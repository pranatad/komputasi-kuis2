<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/2.png" >
<?php
$kode_keuangan = $_GET["kode_keuangan"];
include "../koneksi2.php";
$sql = "select * from laporan_keuangan where kode_keuangan = '$kode_keuangan'";
$hasil = mysqli_query($kon,$sql);
if(!$hasil) die ("Gagal query...");

$data = mysqli_fetch_array($hasil);
$periode = $data["periode"];
$tgl_laporan= $data["tgl_laporan"];
$total = $data["total"];
$id_bag_keuangan = $data["id_bag_keuangan"];
$id_bag_pembelian = $data["id_bag_pembelian"];
?>
<h2>~:: EDIT Laporan  ::~</h2>
<form action="laporan_simpan.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="kode_keuangan" value="<?php echo $kode_keuangan;?>" />
	<table border="1">
		<tr>
			<td>Periode</td>
			<td><input text="text" name="periode" value="<?php echo $periode;?>"/></td>
		</tr>
		<tr>
			<td>Tgl Laporan</td>
			<td><input text="text" name="tgl_laporan" value="<?php echo $tgl_laporan;?>"/></td>
		</tr>
		<tr>
			<td>Total </td>
			<td><input text="text" name="total" value="<?php echo $total;?>" /></td>
		</tr>
		<tr>
			<td>ID Keuangan </td>
			<td><input text="text" name="id_bag_keuangan" value="<?php echo $id_bag_keuangan;?>" /></td>
		</tr>
		<tr>
			<td>ID Pembelian </td>
			<td><input text="text" name="id_bag_pembelian" value="<?php echo $id_bag_pembelian;?>" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			 <input type="submit" value="Simpan" name="proses" />
			 <input type="reset" value="Reset" name="reset" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>
