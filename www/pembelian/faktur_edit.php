<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<body bgcolor="lightgreen" background="../pict/2.png" >
<?php
$id_faktur = $_GET["id_faktur"];
include "../koneksi2.php";
$sql = "select * from faktur_pembelian where id_faktur = '$id_faktur'";
$hasil = mysqli_query($kon,$sql);
if(!$hasil) die ("Gagal query...");

$data = mysqli_fetch_array($hasil);
$id_faktur = $data["id_faktur"];
$tgl_faktur= $data["tgl_faktur"];
$id_bag_keuangan = $data["id_bag_keuangan"];
$id_bag_pembelian= $data["id_bag_pembelian"];
?>
<h2>~:: EDIT Faktur Barang ::~</h2>
<form action="faktur_simpan.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id_faktur" value="<?php echo $id_faktur;?>" />
	<table border="1">
		<tr>
			<td>Tgl Faktur</td>
			<td><input text="text" name="tgl_faktur" value="<?php echo $tgl_faktur;?>"/></td>
		</tr>
		<tr>
			<td>ID Keuangan</td>
			<td><input text="text" name="id_bag_keuangan" value="<?php echo $id_bag_keuangan;?>"/></td>
		</tr>
		<tr>
			<td>ID Pembelian</td>
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
